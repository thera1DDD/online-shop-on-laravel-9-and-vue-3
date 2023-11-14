<?php

namespace App\Http\Controllers\API\Intercom;

use App\Http\Controllers\Controller;
use App\Http\Filters\HddFilter;
use App\Http\Filters\IntercomFilter;
use App\Http\Filters\IpCameraFilter;
use App\Http\Requests\API\IpCamera\IndexRequest;
use App\Http\Resources\IntercomResource;
use App\Http\Resources\PPPoe\PPPoeResource;
use App\Http\Resources\Hdd\HddResource;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Intercom;
use App\Models\IpCamera;
use App\Models\Pppoe;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request)
    {
        $data =$request->validated();
        $filter = app()->make(IntercomFilter::class,['queryParams'=> array_filter($data)]);
        $intercoms = Intercom::filter($filter)->paginate(15,['*'],'page',$data['page']);
        return \App\Http\Resources\Intercom\IntercomResource::collection($intercoms);
    }
}
