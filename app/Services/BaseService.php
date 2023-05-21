<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Pagination\LengthAwarePaginator;

abstract class BaseService
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    protected function store(array $data): Model
    {
        return $this->model->query()->create($data);
    }

    protected function findOrFail(int $id): Model
    {
        return $this->model->query()->findOrFail($id);
    }

    protected function update(int $id, array $data): bool
    {
        return $this->findOrFail($id)->update($data);
    }

    protected function delete(int $id): bool
    {
        return $this->findOrFail($id)->delete();
    }

    protected function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->query()->paginate($perPage);
    }

    protected function index(array $columns = ['*']): Collection|array
    {
        return $this->model->query()->get($columns);
    }

    protected function updateOrCreate(
        array $attributes,
        array $values = []
    ): Model|\Illuminate\Database\Eloquent\Builder {
        return $this->model->query()->updateOrCreate($attributes, $values);
    }

    protected function insertOrUpdate(array $data, array $uniqueKeys): int
    {
        return $this->model->query()->upsert($data, $uniqueKeys);
    }
}
