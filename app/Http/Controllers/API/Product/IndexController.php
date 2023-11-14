<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Filters\IpCameraFilter;
use App\Http\Requests\API\IpCamera\IndexRequest;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request)
    {
        $data =$request->validated();
        $filter =app()->make(IpCameraFilter::class,['queryParams'=> array_filter($data)]);
        $cameras = IpCamera::filter($filter)->paginate(15,['*'],'page',$data['page']);
        return IpCameraResource::collection($cameras);
    }
}
