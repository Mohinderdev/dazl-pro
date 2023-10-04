<?php
namespace App\Modules\Company\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Company\Requests\Api\GetCompanyFromProfessionalRequest;
use App\Modules\Company\Services\CompanyService;
use App\Modules\Professional\Models\Professional;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    protected CompanyService $companyService;

    public function __construct(CompanyService $companyService)
    {
        $this->companyService = $companyService;
    }

    public function getCompanyFromPro(GetCompanyFromProfessionalRequest $companyFromProfessionalRequest)
    {

        $pro= Professional::find($companyFromProfessionalRequest->professional_id);

        $company = $this->companyService->getCompanyFromPro($companyFromProfessionalRequest->professional_id);

    if(isset($company->company)){
        return  response()->json(($company)?[
            "name" => $company->company->name,
            "phone" => $company->company->phone,
            "email" => $company->company->email,
            "website" => $company->company->website,
            "twitter" => $company->company->twitter,
            "facebook" => $company->company->facebook,
            "address" => $company->company->address,
            "references" => $company->company->references,
            "state"=>$pro->state,
            "city"=>$pro->company_city,
            "description" => $company->company->description,
            "business_licence" => $company->company->business_licence,
            "project_portfolio" =>$company->company->images,
            "years_in_business" => $company->company->years_in_business,
            "insurance_certificate" => $company->company->insurance_certificate,
            "insurance_contact_number" => $company->company->insurance_contact_number,
            "insurance_number" => $company->company->insurance_number,
            "images1" => $company->company->images1,
            "images2" => $company->company->images2,
            "images3" => $company->company->images3,
            "images4" => $company->company->images4,
        ] : []);

    }
    else{
        return  response()->json([
           'status'=>200,
            'message'=>"Company Detail Not Found for this user"
        ]);
    }

    }

    public function update(Request $request){

        $this->companyService->updateCompany($request->all());
        return  response()->json([
            'status'=>200,
            'message'=>"Updated Successfully"
        ]);
    }

}
