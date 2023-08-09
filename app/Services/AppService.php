<?php

declare(strict_types=1);

namespace App\Services;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class AppService.
 */
class AppService
{
    protected RepositoryInterface $repository;

    /**
     * @param int $limit
     *
     * @return mixed
     */
    public function all(int $limit = 15): mixed
    {
        return $this->repository->paginate($limit);
    }

    /**
     * @param array $data
     * @param bool  $skipPresenter
     *
     * @return mixed
     */
    public function create(array $data, bool $skipPresenter = false): mixed
    {
        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }

        return $skipPresenter ? $this->repository->skipPresenter()->create($data) :
            $this->repository->create($data);
    }

    /**
     * @param int  $id
     * @param bool $skipPresenter
     *
     * @return mixed
     */
    public function find(int $id, bool $skipPresenter = false): mixed
    {
        if ($skipPresenter) {
            return $this->repository->skipPresenter()->find($id);
        }
        return $this->repository->find($id);
    }

    /**
     * @param array $data
     * @param       $id
     * @param bool  $skipPresenter
     *
     * @return array|mixed
     */
    public function update(array $data, $id, bool $skipPresenter = false): mixed
    {
        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }

        return $skipPresenter ? $this->repository->skipPresenter()->update($data, $id) :
            $this->repository->update($data, $id);
    }

    /**
     * @param $id
     *
     * @return bool[]
     */
    public function delete($id): array
    {
        return ['success' => (bool) $this->repository->delete($id)];
    }
}
