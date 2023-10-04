<?php

namespace App\Modules\HomeDiagnosticReport\Transformers\Api;

use Illuminate\Http\Resources\Json\ResourceCollection;

class HomeDiagnosticReportCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => HomeDiagnosticReportResource::collection($this->collection),
        ];
    }
}
