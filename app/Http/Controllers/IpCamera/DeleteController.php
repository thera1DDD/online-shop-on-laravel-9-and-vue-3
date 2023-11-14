<?php

namespace App\Http\Controllers\IpCamera;

use App\Http\Controllers\Controller;
use App\Models\IpCamera;
use App\Models\IpCameraImage;
use App\Models\Product;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(IpCamera $camera,IpCameraImage $cameraImage)
    {
        $cameraImage->where('ip_cameras_id','=',$camera->id)->delete();
        $camera->delete();
        return redirect()->route('camera.index');
    }
}
