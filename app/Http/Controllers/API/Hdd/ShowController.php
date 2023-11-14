<?php

namespace App\Http\Controllers\API\Hdd;

use App\Http\Controllers\Controller;
use App\Http\Resources\Hdd\HddResource;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\IpCamera;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Hdd $hdds)
    {
        return new HddResource($hdds);
    }
}
