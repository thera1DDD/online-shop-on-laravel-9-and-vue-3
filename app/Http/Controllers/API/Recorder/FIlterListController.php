<?php

namespace App\Http\Controllers\API\Recorder;

use App\Http\Controllers\Controller;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Channel;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Product;
use App\Models\Recorder;
use Illuminate\Http\Request;

class FIlterListController extends Controller
{
    public function __invoke(Recorder $recorder)
    {
        $channels = Channel::all();
        $maxPrice = Recorder::orderBy('price', 'DESC')->first()->price;
        $minPrice = Recorder::orderBy('price', 'ASC')->first()->price;


        $result = [
            'channels'=> $channels,
            'price'=>[
                'max'=>$maxPrice,
                'min'=>$minPrice
            ],
        ];
        return response()->json($result);
    }
}
