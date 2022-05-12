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
            $arParams['image'] = $attributes->file('image')->store('images/categories');
        }
        $arParams['title'] = $attributes->title;
        $arParams['active'] = $attributes->active;
        return Category::create($arParams);
    }

}
