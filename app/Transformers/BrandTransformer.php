<?php

namespace App\Transformers;

use App\Entities\Brand;
use League\Fractal\TransformerAbstract;

/**
 * Class BrandTransformer.
 *
 * @package namespace App\Transformers;
 */
class BrandTransformer extends TransformerAbstract
{
    /**
     * Transform the Brand entity.
     *
     * @param Brand $model
     *
     * @return array
     */
    public function transform(Brand $model): array
    {
        return [
            'id' => (int)$model->id,
            'name' => $model->name,
            'created_at' => $model->created_at->toDateTimeString(),
            'updated_at' => $model->updated_at->toDateTimeString(),
        ];
    }
}
