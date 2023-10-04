<?php

namespace App\Modules\City\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Modules\City\Models\City;
use Yajra\DataTables\DataTables;

class JsonCitiesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new City();
    }

    /**
     *
     * @param Request $request
     * @return RespondWithView
     */
    public function handle()
    {
        $rows = $this->model->latest()->get();

        return Datatables::of($rows)
            ->editColumn('country_id', function($row) {
                return json_decode($row->country->name, true)[config('app.locale')];
            })
            ->editColumn('created_at', function($row) {
                return $row->created_at->diffForHumans();
            })
            ->editColumn('actions', function($row) {
                return view('city::actions', compact('row'));
            })
            ->rawColumns(['actions'])

            ->make(true);
    }
}
