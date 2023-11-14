<?php

namespace App\Http\Controllers\API\Service;

use App\Http\Controllers\Controller;
use App\Http\Filters\PPPoeFilter;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Pppoe;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class FIlterListController extends Controller
{
    public function __invoke(Service $service)
    {
        $maxPrice = Service::orderBy('price', 'DESC')->first()->price;
        $minPrice = Service::orderBy('price', 'ASC')->first()->price;


        $result = [

            'price'=>[
                'max'=>$maxPrice,
                'min'=>$minPrice
            ],
        ];
        return response()->json($result);
    }
}
