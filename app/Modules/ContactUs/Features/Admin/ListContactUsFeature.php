<?php

namespace App\Modules\ContactUs\Features\Admin;

use App\Core\Feature;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\ContactUs\Models\ContactUs;
use Illuminate\Http\Request;

class ListContactUsFeature extends Feature
{
    private $model;

    /**
     * ListUnitsFeature constructor.
     */
    public function __construct()
    {
        $this->model = new ContactUs();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle(Request $request)
    {
        $rows = $this->model->latest()->get();

        return $this->run(RespondWithView::class, [
            'view' => 'contact-us::index',
            'data' => ['rows' => $rows]
        ]);
    }
}
