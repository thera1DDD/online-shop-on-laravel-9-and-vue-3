<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Pppoe;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(\App\Http\Requests\Service\StoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] =  Storage::disk('public')->put('/images/service',$data['preview_image']);
        Service::firstOrCreate(['title' => $data['title']], $data);
        return redirect()->route('service.index');
    }
}
