<?php
namespace App\ThirdParties\UploadImages;


interface ImagesFactoryInterface
{
    public function uploadImage($image):string;

    public function uploadImages(array $images):array;

    public function deleteImage();

    public function deleteImages();
}
