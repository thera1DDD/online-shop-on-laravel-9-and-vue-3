<?php

namespace App\Http\Controllers\API\Recorder;

use App\Http\Controllers\Controller;
use App\Http\Filters\IpCameraFilter;
use App\Http\Filters\RecorderFilter;
use App\Http\Requests\API\Recorder\IndexRequest;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Recorder\RecorderResource;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Product;
use App\Models\Recorder;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(IndexRequest $request)
    {
        $data =$request->validated();
        $filter =app()->make(RecorderFilter::class,['queryParams'=> array_filter($data)]);
        $recorders = Recorder::filter($filter)->paginate(5,['*'],'page',$data['page']);
        return RecorderResource::collection($recorders);
    }
}
