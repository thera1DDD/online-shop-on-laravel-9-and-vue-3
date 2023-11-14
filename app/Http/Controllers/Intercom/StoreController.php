<?php

namespace App\Http\Controllers\Intercom;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Intercom;
use App\Models\Pppoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(\App\Http\Requests\Intercom\StoreRequest $request)
    {
        $data = $request->validated();
        $data['preview_image'] =  Storage::disk('public')->put('/images/intercom',$data['preview_image']);
        Intercom::firstOrCreate(['title' => $data['title']], $data);
        return redirect()->route('intercom.index');
    }
}
