<?php

namespace App\Modules\FeatureOption\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\FeatureOption\Models\FeatureOption;
use Yajra\DataTables\DataTables;

class JsonFeatureOptionsFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new FeatureOption();
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
                return view('feature-options::actions', compact('row'));
            })
            ->rawColumns(['actions'])

            ->make(true);
    }
}
