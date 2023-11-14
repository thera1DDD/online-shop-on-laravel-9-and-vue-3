<?php

namespace App\Http\Controllers\API\Hdd;

use App\Http\Controllers\Controller;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Product;
use Illuminate\Http\Request;

class FIlterListController extends Controller
{
    public function __invoke(Hdd $hdd)
    {
        $maxPrice = Hdd::orderBy('price', 'DESC')->first()->price;
        $minPrice = Hdd::orderBy('price', 'ASC')->first()->price;


        $result = [

            'price'=>[
                'max'=>$maxPrice,
                'min'=>$minPrice
            ],
        ];
        return response()->json($result);
    }
}
