<?php

namespace App\Modules\BlogCategory\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\BlogCategory\Models\BlogCategory;
use App\Modules\BlogCategory\Features\Admin\EditBlogCategoryFeature;
use App\Modules\BlogCategory\Features\Admin\StoreBlogCategoryFeature;
use App\Modules\BlogCategory\Features\Admin\CreateBlogCategoryFeature;
use App\Modules\BlogCategory\Features\Admin\DeleteBlogCategoryFeature;
use App\Modules\BlogCategory\Features\Admin\JsonBlogCategoriesFeature;
use App\Modules\BlogCategory\Features\Admin\ListBlogCategoriesFeature;
use App\Modules\BlogCategory\Features\Admin\UpdateBlogCategoryFeature;

class BlogCategoryController extends Controller
{
    private $model;

    public function __construct(BlogCategory $BlogCategory)
    {
        $this->model = $BlogCategory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListBlogCategoriesFeature::class);
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
        return $this->serve(JsonBlogCategoriesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateBlogCategoryFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreBlogCategoryFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $BlogCategory
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(BlogCategory $BlogCategory)
    {
        return $this->serve(EditBlogCategoryFeature::class, [
            'BlogCategory' => $BlogCategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BlogCategory $BlogCategory
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(BlogCategory $BlogCategory)
    {
        return $this->serve(UpdateBlogCategoryFeature::class, [
            'BlogCategory' => $BlogCategory,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param BlogCategory $BlogCategory
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(BlogCategory $BlogCategory)
    {
        return $this->serve(DeleteBlogCategoryFeature::class, [
            'BlogCategory' => $BlogCategory,
        ]);
    }
}
