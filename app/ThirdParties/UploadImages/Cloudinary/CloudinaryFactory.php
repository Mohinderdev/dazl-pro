<?php


namespace App\ThirdParties\UploadImages\Cloudinary;


use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Configuration\Configuration;
use App\ThirdParties\UploadImages\ImagesFactoryInterface;
use function Matrix\diagonal;

class CloudinaryFactory implements ImagesFactoryInterface
{
    protected UploadApi $uploadApi ;
    public function __construct(){
        Configuration::instance([
            'cloud' => [
                'cloud_name' => 'dev-gnome',
                'api_key' => '377216165841667',
                'api_secret' => 'flilFEevIoGf2P_Oz_fFPA375cQ'
            ], 'url' => [
                'secure' => true
            ]
        ]);
        $this->uploadApi = new UploadApi();
    }

    public function uploadImage($image):string
    {

        $image = $this->uploadApi->upload($image->getRealPath());
        return $image->getArrayCopy()['secure_url'];
    }

    public function uploadImages(array $images):array
    {
        $imagesArr = [];
        foreach ($images as $image){
            array_push($imagesArr ,['url' => $this->uploadImage($image)]);
        }
        return $imagesArr;
    }

    public function deleteImage()
    {
        $this->uploadApi->destroy('');
    }

    public function deleteImages()
    {
    }
}
