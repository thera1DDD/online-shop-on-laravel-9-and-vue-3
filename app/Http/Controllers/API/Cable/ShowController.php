<?php

namespace App\Http\Controllers\API\Cable;

use App\Http\Controllers\Controller;
use App\Http\Resources\Cable\CableResource;
use App\Http\Resources\PPPoe\PPPoeResource;
use App\Http\Resources\Hdd\HddResource;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Cable;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\IpCamera;
use App\Models\Pppoe;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Cable $cables)
    {
        return new CableResource($cables);
    }
}
