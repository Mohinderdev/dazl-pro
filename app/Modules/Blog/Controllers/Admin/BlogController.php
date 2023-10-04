<?php

namespace App\Modules\Blog\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Blog\Models\Blog;
use App\Modules\Blog\Features\Admin\EditBlogFeature;
use App\Modules\Blog\Features\Admin\StoreBlogFeature;
use App\Modules\Blog\Features\Admin\CreateBlogFeature;
use App\Modules\Blog\Features\Admin\DeleteBlogFeature;
use App\Modules\Blog\Features\Admin\JsonBlogsFeature;
use App\Modules\Blog\Features\Admin\ListBlogsFeature;
use App\Modules\Blog\Features\Admin\UpdateBlogFeature;

class BlogController extends Controller
{
    private $model;

    public function __construct(Blog $Blog)
    {
        $this->model = $Blog;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListBlogsFeature::class);
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
        return $this->serve(JsonBlogsFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateBlogFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreBlogFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $Blog
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Blog $Blog)
    {
        return $this->serve(EditBlogFeature::class, [
            'Blog' => $Blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Blog $Blog
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Blog $Blog)
    {
        return $this->serve(UpdateBlogFeature::class, [
            'Blog' => $Blog,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Blog $Blog
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Blog $Blog)
    {
        return $this->serve(DeleteBlogFeature::class, [
            'Blog' => $Blog,
        ]);
    }
}
