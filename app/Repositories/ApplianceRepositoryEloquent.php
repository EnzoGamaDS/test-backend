<?php

namespace App\Repositories;

use App\Entities\Appliance;
use App\Presenters\AppliancePresenter;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Exceptions\RepositoryException;

/**
 * Class ApplianceRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ApplianceRepositoryEloquent extends BaseRepository implements ApplianceRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model(): string
    {
        return Appliance::class;
    }

    /**
     * @return string
     */
    public function presenter(): string
    {
        return AppliancePresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     * @throws RepositoryException
     */
    public function boot(): void
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
