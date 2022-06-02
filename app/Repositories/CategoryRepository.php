<?php

namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
        $model->registerMediaConversions();
    }

    public function all(): Collection
    {
        $categories = Category::all();
        foreach ($categories as $index => $category) {
            if (null !== $objImage = $category->getFirstMedia('images')) {
                $categories[$index]['thumb'] = $objImage->getUrl('categoryThumb');
            }
        }
        return $categories;
    }

    public function create($attributes): Category
    {
        $arParams['title'] = $attributes->title;
        $arParams['active'] = $attributes->active;
        $category = Category::create($arParams);
        if($attributes->hasFile('image') && $attributes->file('image')->isValid()){
            $category->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return $category;
    }

    public function update($attributes, Model $model): bool
    {
        if($attributes->hasFile('image') && $attributes->file('image')->isValid()){
            $model->clearMediaCollection('images');
            $model->addMediaFromRequest('image')->toMediaCollection('images');
        }
        $model->title = $attributes->title;
        $model->active = $attributes->active;
        $model->top = $attributes->top;
        return $model->save();
    }

    public function delete(Model $model): ?bool
    {
        return $model->delete();
    }
}
