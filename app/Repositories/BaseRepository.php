<?php

namespace App\Repositories;

use App\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var Model
     */
    protected Model $model;

    /**
     * BaseRepository constructor.
     *
     * @param  Model  $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param  $attributes
     * @return Model
     */
    public function create($attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
     * @param $id
     * @return Collection|null
     */
    public function find($id): ?Collection
    {
        return $this->model->find($id);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * @param  Model  $model
     * @param  $attributes
     * @return bool
     */
    public function update($attributes, Model $model): bool
    {
        return $model->update($attributes);
    }

    /**
     * @param Model  $model
     * @return bool|null
     */
    public function delete(Model $model): ?bool
    {
        return $model->delete();
    }
}
