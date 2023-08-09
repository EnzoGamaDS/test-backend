<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ApplianceRepository;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * ApplianceService.
 */
class ApplianceService extends AppService
{
    protected RepositoryInterface $repository;

    /**
     * @param ApplianceRepository $repository
     */
    public function __construct(
        ApplianceRepository $repository,

    )
    {
        $this->repository = $repository;
    }
}
