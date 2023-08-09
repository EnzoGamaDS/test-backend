<?php

namespace App\Transformers;

use App\Entities\Appliance;
use League\Fractal\TransformerAbstract;

/**
 * Class ApplianceTransformer.
 *
 * @package namespace App\Transformers;
 */
class ApplianceTransformer extends TransformerAbstract
{
    /**
     * Transform the Appliance entity.
     *
     * @param Appliance $model
     *
     * @return array
     */
    public function transform(Appliance $model): array
    {
        return [
            'id' => (int)$model->id,
            'name' => $model->name,
            'description' => $model->description,
            'voltage' => $model->voltage,
            'brand' => [
                'id' => $model->brand->id,
                'name' => $model->brand->name,
            ],
            'created_at' => $model->created_at->toDateTimeString(),
            'updated_at' => $model->updated_at->toDateTimeString()
        ];
    }
}
