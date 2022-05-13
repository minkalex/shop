<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;

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
     * @param  array $attributes
     * @return bool
     */
    public function update(Model $model, array $attributes): bool;

    /**
     * @param $id
     * @return bool|null
     */
    public function delete($id): bool|null;
}
