<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    /**
     * @param $attributes
     * @return Model
     */
    public function create($attributes): Model;

    /**
     * @param $id
     * @return Collection|null
     */
    public function find($id): ?Collection;

    /**
     * @return Collection
     */
    public function all(): Collection;

    /**
     * @param  Model  $model
     * @param  $attributes
     * @return bool
     */
    public function update($attributes, Model $model): bool;

    /**
     * @param Model $model
     * @return bool|null
     */
    public function delete(Model $model): ?bool;
}
