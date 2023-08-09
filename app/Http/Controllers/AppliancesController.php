<?php

namespace App\Http\Controllers;

use App\Http\Requests\applianceCreateRequest;
use App\Http\Requests\applianceUpdateRequest;
use App\Services\ApplianceService;
use Illuminate\Http\JsonResponse;
use Prettus\Validator\Contracts\ValidatorInterface;

/**
 * Class AppliancesController.
 *
 * @package namespace App\Http\Controllers;
 */
class AppliancesController extends Controller
{
    protected $service;

    /**
     * ChargesController constructor.
     *
     * @param ApplianceService $service
     */
    public function __construct(ApplianceService $service)
    {
        $this->service = $service;
    }

    /**
     * @param applianceCreateRequest $request
     *
     * @return JsonResponse
     *
     */
    public function storeAppliance(applianceCreateRequest $request): JsonResponse
    {
        try {
            if ($this->validator) {
                $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);
            }
            return $this->successCreatedResponse($this->service->create($request->all()));
        } catch (\Exception $exception) {
            return $this->undefinedErrorResponse($exception->getMessage(), $exception->getCode());
        }
    }

    /**
     * @param applianceUpdateRequest $request
     * @param         $id
     *
     * @return JsonResponse
     *
     */
    public function updateAppliance(applianceUpdateRequest $request, $id): JsonResponse
    {
        try {
            if ($this->validator) {
                $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);
            }
            return $this->successResponse($this->service->update($request->all(), $id));
        } catch (\Exception $exception) {
            return $this->undefinedErrorResponse($exception->getMessage(), $exception->getCode());
        }
    }
}
