<?php

namespace App\Traits;

use App\Models\RegisterCustomer\RegisterCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait UploadFile
{
    public static function uploadPhoto($images, $imageColumn = null)
    {
        $uploadImages = [];
        if (is_array($images)) {
            foreach ($images as $image) {
                $uploadImages[] = [$imageColumn => $image->store('photos', 'public')];
            }
        } else {
            $uploadImages = $images->store('photos', 'public');
        }
        return $uploadImages;
    }

    public static function removePhoto(Request $request): bool
    {
//        $photoName = $request->get('photo');
//        if (Storage::disk('public')->exists($photoName)) {
//            Storage::disk('public')->delete($photoName);
//        }
//
//        $removePhoto = RegisterCustomer::where('photo', $photoName);
//        $removePhoto->delete();

        return false;
    }

}
