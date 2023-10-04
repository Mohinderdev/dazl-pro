<?php
namespace App\Modules\Admin\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;

class EmailsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListEmailsFeature::class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return mixed
     * @throws \ReflectionException
     */
     public function store()
     {
        return $this->serve(StoreEmailsFeature::class);
     }

    /**
     * Display the specified resource.
     * @param Email $email
     * @return mixed
     * @throws \ReflectionException
     */
    public function show(Email $email)
    {
        return $this->serve(ShowEmailsFeature::class, [
            'email' => $email
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Email $email
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function update(Email $email)
    {
        return $this->serve(UpdateEmailsFeature::class, [
            'email' => $email
        ]);
    }

    /**
     * Delete the specified resource in storage.
     *
     * @param Email $email
     *
     * @return \Illuminate\View\View
     *
     * @throws \ReflectionException
     */
    public function destroy(Email $email)
    {
        return $this->serve(DeleteEmailsFeature::class, [
            'email' => $email
        ]);
    }
}
