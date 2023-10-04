<?php

namespace App\Modules\Realtor\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Realtor\Models\Realtor;
use App\Modules\Realtor\Features\Admin\EditRealtorFeature;
use App\Modules\Realtor\Features\Admin\StoreRealtorFeature;
use App\Modules\Realtor\Features\Admin\CreateRealtorFeature;
use App\Modules\Realtor\Features\Admin\DeleteRealtorFeature;
use App\Modules\Realtor\Features\Admin\JsonRealtorsFeature;
use App\Modules\Realtor\Features\Admin\ListRealtorsFeature;
use App\Modules\Realtor\Features\Admin\UpdateRealtorFeature;

class RealtorController extends Controller
{
    private $model;

    public function __construct(Realtor $Realtor)
    {
        $this->model = $Realtor;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListRealtorsFeature::class);
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
        return $this->serve(JsonRealtorsFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateRealtorFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreRealtorFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $Realtor
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Realtor $Realtor)
    {
        return $this->serve(EditRealtorFeature::class, [
            'Realtor' => $Realtor,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Realtor $Realtor
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Realtor $Realtor)
    {
        return $this->serve(UpdateRealtorFeature::class, [
            'Realtor' => $Realtor,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Realtor $Realtor
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Realtor $Realtor)
    {
        return $this->serve(DeleteRealtorFeature::class, [
            'Realtor' => $Realtor,
        ]);
    }
}
