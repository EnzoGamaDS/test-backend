<?php

declare(strict_types=1);

namespace App\Presenters\Trait;

use Illuminate\Http\Request;

trait PresentTrait
{
    /** @var Request */
    protected Request $request;

    /**
     * AppCriteria constructor.
     *
     * @param Request $request
     *
     * @throws \Exception
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
        parent::__construct();
    }

    /**
     * Transformer.
     *
     * @return mixed
     */
    public function getTransformer(): mixed
    {
        $className = $this->getTransformerClassName();
        return new $className();
    }

    /**
     * Get the transformer class name based on the inheriting class name.
     *
     * @return string
     */
    protected function getTransformerClassName(): string
    {
        $inheritingClassName = get_called_class();
        $device = ucfirst($this->request->header('Device') ?? '');

        $transformerClassName = $this->buildTransformerClassName($inheritingClassName, $device);

        if (class_exists($transformerClassName)) {
            return $transformerClassName;
        }

        return 'App\\Transformers\\' . $this->transformerClassName($inheritingClassName);
    }

    /**
     * Build the transformer class name based on the inheriting class name.
     *
     * @param string $inheritingClassName
     * @param string $device
     *
     * @return string
     */
    protected function buildTransformerClassName(string $inheritingClassName, string $device): string
    {
        return 'App\\Transformers\\' . ucfirst($device) . $this->transformerClassName($inheritingClassName);
    }

    protected function transformerClassName(string $inheritingClassName): string
    {
        $className = substr($inheritingClassName, strrpos($inheritingClassName, '\\') + 1);
        return str_replace('Presenter', 'Transformer', $className);
    }
}
