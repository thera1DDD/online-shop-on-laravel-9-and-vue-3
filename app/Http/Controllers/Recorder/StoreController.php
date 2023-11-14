<?php

namespace App\Http\Controllers\Recorder;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Color;
use App\Models\ColorProduct;
use App\Models\IpCamera;
use App\Models\IpCameraImage;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\Recorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(\App\Http\Requests\Recorder\StoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] =  Storage::disk('public')->put('/images/recorder',$data['preview_image']);
        Recorder::firstOrCreate(['title' => $data['title']], $data);
        return  redirect()->route('recorder.index');
    }
}
