<?php

namespace App\Modules\ServiceType\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\ServiceType\Models\ServiceType;
use Yajra\DataTables\DataTables;

class JsonServiceTypesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new ServiceType();
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
            ->editColumn('created_at', function($row) {
                return $row->created_at->diffForHumans();
            })
            ->editColumn('actions', function($row) {
                return view('service-types::actions', compact('row'));
            })
            ->rawColumns(['actions'])

            ->make(true);
    }
}
