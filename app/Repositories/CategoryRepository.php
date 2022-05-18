<?php

namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    /**
     * CategoryRepository constructor.
     *
     * @param Category $model
     */
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function create($attributes): Category
    {
        $arParams = [];
        if (!empty($attributes->file())) {
            //dd($attributes->file('file'));
            $arParams['image'] = $attributes->file('image')->store('images/categories');
            //$arParams['image'] = Storage::putFile('/', $attributes->file('image'));;
        }
        $arParams['title'] = $attributes->title;
        $arParams['active'] = $attributes->active;
        return Category::create($arParams);
    }

    public function update($attributes, $model): bool
    {
        if (!empty($attributes->file())) {
            $model->image = $attributes->file('image')->store('images/categories');
        }
        $model->title = $attributes->title;
        $model->active = $attributes->active;
        return $model->save();
    }

}
