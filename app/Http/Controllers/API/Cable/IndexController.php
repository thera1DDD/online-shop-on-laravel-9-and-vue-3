<?php

namespace App\Http\Controllers\API\Cable;

use App\Http\Controllers\Controller;
use App\Http\Filters\CableFilter;
use App\Http\Filters\HddFilter;
use App\Http\Filters\IpCameraFilter;
use App\Http\Requests\API\IpCamera\IndexRequest;
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

class IndexController extends Controller
{
    public function __invoke(\App\Http\Requests\API\Cable\IndexRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(CableFilter::class,['queryParams'=> array_filter($data)]);
        $cables = Cable::filter($filter)->paginate(15,['*'],'page',$data['page']);
        return CableResource::collection($cables);
    }
}
