<?php

namespace App\Http\Controllers;

use App\Services\BrandService;

/**
 * Class BrandsController.
 *
 * @package namespace App\Http\Controllers;
 */
class BrandsController extends Controller
{
    protected $service;

    /**
     * ChargesController constructor.
     *
     * @param BrandService $service
     */
    public function __construct(BrandService $service)
    {
        $this->service = $service;
    }
}
