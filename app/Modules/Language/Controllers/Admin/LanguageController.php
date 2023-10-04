<?php

namespace App\Modules\Language\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Modules\Language\Models\Language;
use App\Modules\Language\Features\Admin\EditLanguageFeature;
use App\Modules\Language\Features\Admin\StoreLanguageFeature;
use App\Modules\Language\Features\Admin\CreateLanguageFeature;
use App\Modules\Language\Features\Admin\DeleteLanguageFeature;
use App\Modules\Language\Features\Admin\JsonLanguagesFeature;
use App\Modules\Language\Features\Admin\ListLanguagesFeature;
use App\Modules\Language\Features\Admin\UpdateLanguageFeature;

class LanguageController extends Controller
{
    private $model;

    public function __construct(Language $language)
    {
        $this->model = $language;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListLanguagesFeature::class);
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
        return $this->serve(JsonLanguagesFeature::class);
    }

    /**
     * Show creation form.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function create()
    {
        return $this->serve(CreateLanguageFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
    public function store()
    {
        return $this->serve(StoreLanguageFeature::class);
    }

    /**
     * Show update form.
     *
     * @param Language $language
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function edit(Language $language)
    {
        return $this->serve(EditLanguageFeature::class, [
            'language' => $language,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Language $language
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Language $language)
    {
        return $this->serve(UpdateLanguageFeature::class, [
            'language' => $language,
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Language $language
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Language $language)
    {
        return $this->serve(DeleteLanguageFeature::class, [
            'language' => $language,
        ]);
    }
}
