<?php

namespace App\Modules\Professional\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Professional\Models\Professional;
use App\Modules\Professional\Features\Admin\EditProfessionalFeature;
use App\Modules\Professional\Features\Admin\StoreProfessionalFeature;
use App\Modules\Professional\Features\Admin\CreateProfessionalFeature;
use App\Modules\Professional\Features\Admin\DeleteProfessionalFeature;
use App\Modules\Professional\Features\Admin\JsonProfessionalsFeature;
use App\Modules\Professional\Features\Admin\ListProfessionalsFeature;
use App\Modules\Professional\Features\Admin\UpdateProfessionalFeature;

class ProfessionalController extends Controller
{
    private $model;

    public function __construct(Professional $Professional)
    {
        $this->model = $Professional;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListProfessionalsFeature::class);
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
        return $this->serve(JsonProfessionalsFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateProfessionalFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreProfessionalFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $Professional
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Professional $Professional)
    {
        return $this->serve(EditProfessionalFeature::class, [
            'Professional' => $Professional,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Professional $Professional
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Professional $Professional)
    {
        return $this->serve(UpdateProfessionalFeature::class, [
            'Professional' => $Professional,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Professional $Professional
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Professional $Professional)
    {
        return $this->serve(DeleteProfessionalFeature::class, [
            'Professional' => $Professional,
        ]);
    }
}
