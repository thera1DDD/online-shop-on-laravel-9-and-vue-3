<?php

namespace App\Http\Controllers\API\Cable;

use App\Http\Controllers\Controller;
use App\Http\Filters\PPPoeFilter;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Cable;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Pppoe;
use App\Models\Product;
use Illuminate\Http\Request;

class FIlterListController extends Controller
{
    public function __invoke(Cable $cable)
    {
        $maxPrice = Pppoe::orderBy('price', 'DESC')->first()->price;
        $minPrice = Pppoe::orderBy('price', 'ASC')->first()->price;


        $result = [

            'price'=>[
                'max'=>$maxPrice,
                'min'=>$minPrice
            ],
        ];
        return response()->json($result);
    }
}
