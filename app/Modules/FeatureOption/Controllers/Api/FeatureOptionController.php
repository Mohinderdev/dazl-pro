<?php
namespace App\Modules\FeatureOption\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\FeatureOption\Requests\Api\GetFeatureOptionsRequest;
use App\Modules\FeatureOption\Services\FeatureOptionService;
use App\Modules\FeatureOption\Transformers\Api\FeatureOptionCollection;
class FeatureOptionController extends Controller
{
    public FeatureOptionService $featureOptionService;
    public function __construct(FeatureOptionService $featureOptionService)
    {
        $this->featureOptionService = $featureOptionService;
    }

    public function getFeatureOptions(GetFeatureOptionsRequest $getFeatureOptionsRequest)
    {

        $featureOptions = $this->featureOptionService->getFeaturesOptionsAssociatedWithFeatures($getFeatureOptionsRequest->feature_id);

        return response()->json(new FeatureOptionCollection($featureOptions));

    }

}
