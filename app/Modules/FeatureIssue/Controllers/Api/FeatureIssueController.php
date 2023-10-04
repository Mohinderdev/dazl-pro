<?php
namespace App\Modules\FeatureIssue\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\FeatureIssue\Models\FeatureIssue;
use App\Modules\FeatureIssue\Features\Api\ListFeatureIssuesFeature;
use Symfony\Component\HttpFoundation\Response;

class FeatureIssueController extends Controller
{
    private $model;

    public function __construct(FeatureIssue $unitView)
    {
        $this->model = $unitView;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \ReflectionException
     */
    public function index()
    {
        return $this->serve(ListFeatureIssuesFeature::class);
    }
    public function getfeatureissue($id)
    {


     $featrure_issue= DB::table('feature_issues')->where('feature_id',$id)->get();
        return response()->json([

            'data' => $featrure_issue

        ], Response::HTTP_OK);

    }
}
