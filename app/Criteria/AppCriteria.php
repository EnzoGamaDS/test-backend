<?php

declare(strict_types=1);

namespace App\Criteria;

use Illuminate\Http\Request;
use Prettus\Repository\Contracts\CriteriaInterface;

/**
 * Class AppCriteria.
 */
abstract class AppCriteria implements CriteriaInterface
{
    protected Request $request;

    /**
     * AppCriteria constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
