<?php

namespace App\Modules\Category\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Category\Models\Category;
use App\Modules\Category\Features\Admin\EditCategoryFeature;
use App\Modules\Category\Features\Admin\StoreCategoryFeature;
use App\Modules\Category\Features\Admin\CreateCategoryFeature;
use App\Modules\Category\Features\Admin\DeleteCategoryFeature;
use App\Modules\Category\Features\Admin\JsonCategoriesFeature;
use App\Modules\Category\Features\Admin\ListCategoriesFeature;
use App\Modules\Category\Features\Admin\UpdateCategoryFeature;

class CategoryController extends Controller
{
    private $model;

    public function __construct(Category $Category)
    {
        $this->model = $Category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListCategoriesFeature::class);
    }

    /**
     * Get datatable json.
     *
     * @return Collection
     *
     * @throws \Exception
     */
    public function jsonData()
    {
        return $this->serve(JsonCategoriesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateCategoryFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreCategoryFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $Category
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Category $Category)
    {
        return $this->serve(EditCategoryFeature::class, [
            'Category' => $Category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Category $Category
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Category $Category)
    {
        return $this->serve(UpdateCategoryFeature::class, [
            'Category' => $Category,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Category $Category
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Category $Category)
    {
        return $this->serve(DeleteCategoryFeature::class, [
            'Category' => $Category,
        ]);
    }
}
