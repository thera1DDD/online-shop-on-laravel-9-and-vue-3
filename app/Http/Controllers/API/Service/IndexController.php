<?php

namespace App\Http\Controllers\API\Service;

use App\Http\Controllers\Controller;
use App\Http\Filters\HddFilter;
use App\Http\Filters\IpCameraFilter;
use App\Http\Filters\ServiceFilter;
use App\Http\Requests\API\IpCamera\IndexRequest;
use App\Http\Resources\PPPoe\PPPoeResource;
use App\Http\Resources\Hdd\HddResource;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Service\ServiceResource;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\IpCamera;
use App\Models\Pppoe;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(\App\Http\Requests\API\Service\IndexRequest $request)
    {
        $data =$request->validated();
        $filter = app()->make(ServiceFilter::class,['queryParams'=> array_filter($data)]);
        $services = Service::filter($filter)->paginate(15,['*'],'page',$data['page']);
        return ServiceResource::collection($services);
    }
}
