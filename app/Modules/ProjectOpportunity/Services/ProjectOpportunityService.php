<?php


namespace App\Modules\ProjectOpportunity\Services;

use App\Modules\ProjectOpportunity\Repositories\ProjectOpportunityApiRepo;
use Carbon\Carbon;

class ProjectOpportunityService
{
    protected ProjectOpportunityApiRepo $projectOpportunityApiRepo;
    public function __construct(ProjectOpportunityApiRepo $projectOpportunityApiRepo){
        $this->projectOpportunityApiRepo = $projectOpportunityApiRepo;
    }

    public function saveBulkOfProjectOpp(
        string $projectId ,
        string $customerId ,
        array $professionalIds
    ){
        $insertions = $this->prepareBulkInsertionArrayForProjectOpportunities($projectId ,$customerId ,$professionalIds);
        return $this->projectOpportunityApiRepo->saveProjectOpportunities($insertions);
    }

    private function prepareBulkInsertionArrayForProjectOpportunities(
        string $projectId ,
        string $customerId ,
        array $professionalIds
    ): array
    {
        $insertionsArray = [];
        $now = Carbon::now()->format("Y-m-d h:i:s");
        foreach ($professionalIds as $professionalId){
            $insertionsArray[] = [
                'customer_id' => $customerId ,
                'project_id' => $projectId,
                'professional_id' => $professionalId,
                'created_at' => $now ,
                'updated_at' => $now,
            ];
        }
        return $insertionsArray;
    }

    public function getProjectOppByProId(int $proId,$page){
        return $this->projectOpportunityApiRepo->getProjectOppByProId($proId,$page);
    }
    public function createProject(array $data){
        return $this->projectOpportunityApiRepo->create($data);
    }
    public function updateProject(int $id ,array $data){
        return $this->projectOpportunityApiRepo->find($id)->update($data);
    }
}
