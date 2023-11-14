<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(IpCamera $camera)
    {
        return new IpCameraResource($camera);
    }
}
