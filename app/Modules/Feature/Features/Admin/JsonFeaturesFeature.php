<?php

namespace App\Modules\Feature\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\Feature\Models\Feature;
use Yajra\DataTables\DataTables;

class JsonFeaturesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new Feature();
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
                return view('features::actions', compact('row'));
            })
            ->rawColumns(['actions'])

            ->make(true);
    }
}
