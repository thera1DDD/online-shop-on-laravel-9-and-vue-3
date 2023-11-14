<?php

namespace App\Http\Controllers\API\Hdd;

use App\Http\Controllers\Controller;
use App\Http\Filters\HddFilter;
use App\Http\Filters\IpCameraFilter;
use App\Http\Requests\API\IpCamera\IndexRequest;
use App\Http\Resources\Hdd\HddResource;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\IpCamera;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(\App\Http\Requests\API\Hdd\IndexRequest $request)
    {
        $data =$request->validated();
        $filter =app()->make(HddFilter::class,['queryParams'=> array_filter($data)]);
        $hdds = Hdd::filter($filter)->paginate(15,['*'],'page',$data['page']);
        return HddResource::collection($hdds);
    }
}
