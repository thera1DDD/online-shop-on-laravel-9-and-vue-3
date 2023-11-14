<?php

namespace App\Http\Controllers\Cable;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Cable;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Pppoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(\App\Http\Requests\Cable\StoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] =  Storage::disk('public')->put('/images/cable',$data['preview_image']);
        Cable::firstOrCreate(['title' => $data['title']], $data);
        return redirect()->route('cable.index');
    }
}
