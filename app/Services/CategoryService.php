<?php

namespace App\Services;

use App\Http\Requests\StoreCategoryRequest;
use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class CategoryService
{
    /**
     * @var CategoryRepositoryInterface
     */
    private CategoryRepositoryInterface $categoryRepository;

    /**
     * @param  CategoryRepositoryInterface  $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->categoryRepository->all();
    }

    /**
     * @param  StoreCategoryRequest  $request
     * @return Category
     */
    public function store(StoreCategoryRequest $request): Category
    {
        return $this->categoryRepository->create($request);
    }

    /**
     * @param  Category  $category
     * @param $attributes
     * @return bool
     */
    public function update($attributes, Category $category): bool
    {
        return $this->categoryRepository->update($attributes, $category);
    }
}
