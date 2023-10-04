<?php
namespace App\Modules\HomeDiagnosticReport\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\HomeDiagnosticReport\Requests\Api\CreateHomeDiagnosticReportRequest;
use App\Modules\HomeDiagnosticReport\Requests\Api\GetHouseDataRequest;
use App\Modules\HomeDiagnosticReport\Services\HomeDiagnosticReportService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class HomeDiagnosticReportController extends Controller
{
    private HomeDiagnosticReportService $homeDiagnosticReportService;

    public function __construct(HomeDiagnosticReportService $homeDiagnosticReportService)
    {
        $this->homeDiagnosticReportService = $homeDiagnosticReportService;
    }

    public function store(Request $createHomeDiagnosticReportRequest){
//print_r($createHomeDiagnosticReportRequest->all());die('here');

        $validator = Validator::make($createHomeDiagnosticReportRequest->all(), [
//            'first_name' => ['required'],
//            'last_name' => ['required'],
//            'client_email' => ['required'],
//            'street_no' => ['required'],
//            'street_name' => ['required'],
//            'city' =>['required'],
//            'state' => ['required'],
//            'zip_code' => ['required'],
//            'highest_price' => ['required' ,'numeric'],
//            'lowest_price' => ['required','numeric'],
//            'year_built' => ['required'],
//            'bathrooms' => ['required'],
//            'bedrooms' => ['required'],
//            'basement' => ['required'],
//            'gross_size' => ['required'],
//            'spaces' => ['required'],
//            'parking_features' => ['required'],
//            'property_stories' => ['required'],
//            'structure_type' => ['required'],
//            'lot_size' => ['required'],
//            'location' => ['required'],
//            'foundation_type' => ['required'],
//            'tax_accessed_value' => ['required'],
//            'annual_tax_amount' => ['required'],
//            'sale_date' => ['required'],
//            'sale_amount' => ['required'],
//            'type' => ['required'],
//            'phd_description' => ['required'],
        ]);

        //Send failed response if request is not valid
        if ($validator->fails()) {
            $message = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($message,500);
        }
        $homeD = $this->homeDiagnosticReportService->storeHomeDiagnosticReport($createHomeDiagnosticReportRequest->all());
        return response()->json($homeD);
    }

    public function getHouseData(GetHouseDataRequest $getHouseDataRequest): \Illuminate\Http\JsonResponse
    {


        // $houseData = $this->homeDiagnosticReportService->getHouseData(
        //     $houseData =$getHouseDataRequest->streetNum.' '.$getHouseDataRequest->streetName.' '.$getHouseDataRequest->streetType.','.$getHouseDataRequest->city.' '.$getHouseDataRequest->state.' '.$getHouseDataRequest->zip_code . ',' . $getHouseDataRequest->address
        // );

        $houseData = $this->homeDiagnosticReportService->getHouseData(
            $houseData =$getHouseDataRequest->address
        );


if(is_array($houseData)){
    $property = @$houseData[0];
}
else{
    $property ="";
}

        $type = @$property->propertyType ? @$property->propertyType : @$houseData->type;
        $yr_built = @$property->yearBuilt? $property->yearBuilt : @$houseData->year_built;
//        $basement_type = @$property->building->interior->bsmtType? $property->summary->yearBuilt : $houseData->basement;
//        $grossSize = @$property->building->size->grossSize  ? $property->building->size->grossSize : $houseData->gross_size;
        $bathrooms = @$property->bathrooms ? @$property->bathrooms : @$houseData->bathrooms;
        $bedrooms = @$property->bedrooms ? @$property->bedrooms : @$houseData->bedrooms;
//        $spaces = @$property->building->summary->unitsCount ? @$property->building->summary->unitsCount : $houseData->spaces;
//        $parkingFeatures = @$property->building->summary->unitsCount? @$property->building->summary->unitsCount :$houseData->parking_features;
//        $propertyStories = @$property->building->summary->levels ? @$property->building->summary->levels : $houseData->property_stories;
        $structureType = @$property->features->architectureType ? @$property->features->architectureType: @$houseData->structure_type;
        $lotSize = @$property->lotSize ? @$property->lotSize : @$houseData->lot_size;
        $location = @$property->formattedAddress ? @$property->formattedAddress : @$houseData->location;
        $foundationType = @$property->features->foundationType ? @$property->features->foundationType : @$houseData->foundation_type;
        $taxAccessedValue = @$property->taxAssessment ? @$property->taxAssessment : @$houseData->tax_accessed_value;
//        $annualTaxAmount = @$property->assessment->tax->taxAmt  ? @$property->assessment->tax->taxAmt  : $houseData->annual_tax_amount;
        $saleDate = @$property->lastSaleDate  ? @$property->lastSaleDate  : @$houseData->sale_date;
//        $saleAmount = @$property->sale->saleAmountData->saleAmt ? @$property->sale->saleAmountData->saleAmt  : $houseData->sale_amount;
        return response()->json([
            "type" => $type,
            "year_built" => $yr_built,
//            "basement" => $basement_type,
//            "gross_size" => $grossSize,
            "bedrooms" => $bedrooms,
            "bathrooms" =>$bathrooms,
//            "spaces" => $spaces,
//            "parking_features" => $parkingFeatures,
//            "property_stories" => $propertyStories,
            "structure_type" => $structureType,
            "lot_size" => $lotSize,
            "location" => $location,
            "foundation_type" => $foundationType,
            "tax_accessed_value" => $taxAccessedValue,
//            "annual_tax_amount" => $annualTaxAmount,
            "sale_date" => $saleDate,
//            "sale_amount" => $saleAmount,

        ]);
    }

    public function getPHDForRealtor(): \Illuminate\Http\JsonResponse
    {
        $reports = $this->homeDiagnosticReportService->getPHDUsingRealtorId();
        return response()->json([
           'reports' => $reports
        ]);
    }
    public function getOnePHDForRealtor($home_diagnostic_reportId): \Illuminate\Http\JsonResponse
    {
        $reports = $this->homeDiagnosticReportService->getPHDUsingRealtorId($home_diagnostic_reportId);
        return response()->json([
            'reports' => $reports
        ]);
    }


}
