<?php

namespace App\Modules\Company\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Company\Models\Company;
use App\Modules\Company\Features\Admin\EditCompanyFeature;
use App\Modules\Company\Features\Admin\StoreCompanyFeature;
use App\Modules\Company\Features\Admin\CreateCompanyFeature;
use App\Modules\Company\Features\Admin\DeleteCompanyFeature;
use App\Modules\Company\Features\Admin\JsonCompaniesFeature;
use App\Modules\Company\Features\Admin\ListCompaniesFeature;
use App\Modules\Company\Features\Admin\UpdateCompanyFeature;

class CompanyController extends Controller
{
    private $model;

    public function __construct(Company $Company)
    {
        $this->model = $Company;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListCompaniesFeature::class);
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
        return $this->serve(JsonCompaniesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {

        return $this->serve(CreateCompanyFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreCompanyFeature::class);
    }

    /**
     * Show update form.
     *
     * @param finish_type $Company
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Company $Company)
    {
        return $this->serve(EditCompanyFeature::class, [
            'Company' => $Company,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Company $Company
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Company $Company)
    {
        return $this->serve(UpdateCompanyFeature::class, [
            'Company' => $Company,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Company $Company
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Company $Company)
    {
        return $this->serve(DeleteCompanyFeature::class, [
            'Company' => $Company,
        ]);
    }
}
