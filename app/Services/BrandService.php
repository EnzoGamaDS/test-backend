<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\BrandRepository;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * ApplianceService.
 */
class BrandService extends AppService
{
    protected RepositoryInterface $repository;

    /**
     * @param BrandRepository $repository
     */
    public function __construct(
        BrandRepository $repository,

    )
    {
        $this->repository = $repository;
    }

    public function all(int $limit = 15): mixed
    {
        return $this->repository->all();
    }
}
