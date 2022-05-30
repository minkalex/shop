<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\JsonResponse;
use App\Models\Category;
use App\Services\CategoryService;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CategoryController extends Controller
{
    private CategoryService $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse|View
     */
    public function index(Request $request): JsonResponse|View
    {
        if ($request->hasHeader('X-Requested-With') && ('Axios' === $request->header('X-Requested-With'))) {
            /*$result = ['status' => 200];

            try {
                $result['data'] = $this->categoryService->all();
            } catch (Exception $e) {
                $result = ['status' => 500, 'error' => $e->getMessage()];
            }*/

            return response()->json($this->categoryService->all());
        } else {
            return view('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        if (!Auth::check() || Auth::user()->cannot('create')) {
            abort(403);
        }
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCategoryRequest  $request
     * @return JsonResponse
     */
    public function store(StoreCategoryRequest $request): JsonResponse
    {
        return response()->json($this->categoryService->store($request));
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @param  Category  $category
     * @return View|JsonResponse
     */
    public function show(Request $request, Category $category): View|JsonResponse
    {
        if ($request->hasHeader('X-Requested-With') && ('Axios' === $request->header('X-Requested-With'))) {
            return response()->json($category);
        } else {
            return view('welcome');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return View
     */
    public function edit(): View
    {
        if (!Auth::check() || Auth::user()->cannot('edit')) {
            abort(403);
        }
        return view('welcome');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCategoryRequest  $request
     * @param  Category  $category
     * @return bool
     */
    public function update(UpdateCategoryRequest $request, Category $category): bool
    {
        return $this->categoryService->update($request, $category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category  $category
     * @return null|bool
     */
    public function destroy(Category $category): ?bool
    {
        return $this->categoryService->delete($category);
    }
}
