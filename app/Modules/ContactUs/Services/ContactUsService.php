<?php


namespace App\Modules\ContactUs\Services;


use App\Modules\ContactUs\Repositories\ContactUsApiRepo;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;

class ContactUsService
{
    protected ContactUsApiRepo $contactUsApiRepo;
    protected ImagesFactoryInterface $imagesFactory;

    public function __construct(ContactUsApiRepo $contactUsApiRepo ,ImagesFactoryInterface $imagesFactory){
        $this->contactUsApiRepo = $contactUsApiRepo;
        $this->imagesFactory = $imagesFactory;
    }

    public function store(array $data){
        $contactUs = $this->contactUsApiRepo->create($data);
        if(isset($data['images'])){
            $images = $this->uploadImagesAndSetImageDescriptionArray($data['images']);
            $contactUs->images()->createMany($images);
        }
        return $contactUs;
    }

    private function uploadImagesAndSetImageDescriptionArray($images ): array
    {
        $array = [];
        foreach ($images as $image){
            $url = $this->imagesFactory->uploadImage($image[0]);
            $array[] = [
                'url' => $url,
                'description' => $image[1]
            ];
        }
        return $array;
    }

    public function getProject(int $id){
        return $this->projectApiRepo->getProject($id);
    }

    public function updateProjectStatus(int $id,string $status){
        return $this->projectApiRepo->find($id)->update([
            'status' => $status
        ]);
    }

    public function getProjectsForCustomer(int $customerId){
        return $this->projectApiRepo->getProjectsWithCustomer($customerId);
    }
}
