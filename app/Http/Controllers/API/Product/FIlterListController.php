<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Product;
use Illuminate\Http\Request;

class FIlterListController extends Controller
{
    public function __invoke(IpCamera $camera)
    {
        $megapixels = Megapixels::all();
        $maxPrice = IpCamera::orderBy('price', 'DESC')->first()->price;
        $minPrice = IpCamera::orderBy('price', 'ASC')->first()->price;


        $result = [
            'megapixels'=> $megapixels,
            'price'=>[
                'max'=>$maxPrice,
                'min'=>$minPrice
            ],
        ];
        return response()->json($result);
    }
}
