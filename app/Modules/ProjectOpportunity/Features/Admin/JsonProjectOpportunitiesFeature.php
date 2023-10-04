<?php

namespace App\Modules\ProjectOpportunity\Features\Admin;

use App\Core\Feature;
use Illuminate\Http\Request;
use App\Core\Response\Admin\RespondWithView;
use App\Modules\ProjectOpportunity\Models\ProjectOpportunity;
use Yajra\DataTables\DataTables;

class JsonProjectOpportunitiesFeature extends Feature
{
    private $model;
    /**
     * ListCurrenciesFeature constructor.
     */
    public function __construct()
    {
        $this->model = new ProjectOpportunity();
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
                return view('project-opportunities::actions', compact('row'));
            })
            ->rawColumns(['actions'])

            ->make(true);
    }
}
