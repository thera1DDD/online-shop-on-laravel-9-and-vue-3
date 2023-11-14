<?php

namespace App\Http\Controllers\API\PPPoe;

use App\Http\Controllers\Controller;
use App\Http\Resources\PPPoe\PPPoeResource;
use App\Http\Resources\Hdd\HddResource;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\IpCamera;
use App\Models\Pppoe;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Pppoe $pppoes)
    {
        return new PPPoeResource($pppoes);
    }
}
