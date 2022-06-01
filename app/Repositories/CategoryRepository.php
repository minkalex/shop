<?php

namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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
            $categories[$index]['thumb'] = $category->getFirstMedia('images')->getUrl('categoryThumb');
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

    public function update($attributes, $model): bool
    {
        if($attributes->hasFile('image') && $attributes->file('image')->isValid()){
            $model->addMediaFromRequest('image')->toMediaCollection('images');
        }
        $model->title = $attributes->title;
        $model->active = $attributes->active;
        $model->top = $attributes->top;
        return $model->save();
    }

    public function delete(Model $model): ?bool
    {
        $model->clearMediaCollection();
        return $model->delete();
    }
}
