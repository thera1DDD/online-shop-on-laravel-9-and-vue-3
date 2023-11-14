<?php

namespace App\Http\Controllers\IpCamera;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Color;
use App\Models\ColorProduct;
use App\Models\IpCamera;
use App\Models\IpCameraImage;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(\App\Http\Requests\IpCamera\StoreRequest $request)
    {
        $data = $request->validated();
        $cameraImages = $data['camera_images'];
        $data['preview_image'] =  Storage::disk('public')->put('/images',$data['preview_image']);
        unset($data['camera_images']);
        $camera = IpCamera::firstOrCreate(['title' => $data['title']], $data);

        foreach ($cameraImages as $cameraImage){

            $currentImagesCount = IpCameraImage::where('ip_cameras_id',$camera->id)->count();

            if($currentImagesCount > 3) continue;
            $filePath = Storage::disk('public')->put('/images',$cameraImage);
            IpCameraImage::create([
                'ip_cameras_id'=> $camera->id,
                'file_path'=>$filePath,
            ]);
        }

        return  redirect()->route('camera.index');
    }
}
