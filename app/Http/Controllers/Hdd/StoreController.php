<?php

namespace App\Http\Controllers\Hdd;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use App\Models\Hdd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(\App\Http\Requests\Hdd\StoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] =  Storage::disk('public')->put('/images/hdd',$data['preview_image']);
        Hdd::firstOrCreate(['title' => $data['title']], $data);
        return redirect()->route('hdd.index');
    }
}
