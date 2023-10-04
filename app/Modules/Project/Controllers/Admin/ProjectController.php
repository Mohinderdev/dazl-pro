<?php

namespace App\Modules\Project\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Project\Models\Project;
use App\Modules\Project\Features\Admin\EditProjectFeature;
use App\Modules\Project\Features\Admin\StoreProjectFeature;
use App\Modules\Project\Features\Admin\CreateProjectFeature;
use App\Modules\Project\Features\Admin\DeleteProjectFeature;
use App\Modules\Project\Features\Admin\JsonProjectsFeature;
use App\Modules\Project\Features\Admin\ListProjectsFeature;
use App\Modules\Project\Features\Admin\UpdateProjectFeature;
use App\ThirdParties\UploadImages\Cloudinary\CloudinaryFactory;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;

class ProjectController extends Controller
{
    private $model;
    private ImagesFactoryInterface $imagesFactory;
    public function __construct(Project $Project )
    {
        $this->model = $Project;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListProjectsFeature::class);
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
        return $this->serve(JsonProjectsFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateProjectFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {

        return $this->serve(StoreProjectFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $Project
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Project $Project)
    {
        return $this->serve(EditProjectFeature::class, [
            'Project' => $Project,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Project $Project
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Project $Project)
    {
        return $this->serve(UpdateProjectFeature::class, [
            'Project' => $Project,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Project $Project
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Project $Project)
    {
        return $this->serve(DeleteProjectFeature::class, [
            'Project' => $Project,
        ]);
    }
}
