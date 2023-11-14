<?php

namespace App\Http\Controllers\API\Recorder;

use App\Http\Controllers\Controller;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Recorder\RecorderResource;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Product;
use App\Models\Recorder;
use Illuminate\Http\Request;

class ShowController extends Controller
{
   public function __invoke(Recorder $recorder)
   {
       return new RecorderResource($recorder);
   }
}
