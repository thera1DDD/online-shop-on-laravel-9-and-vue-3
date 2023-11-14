<?php

namespace App\Http\Controllers\PPPoe;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Http\Requests\PPPoe\StoreRequest;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Pppoe;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(\App\Http\Requests\PPPoe\UpdateRequest $request,Pppoe $pppoe)
    {
        $data =$request->validated();
        $pppoe->update($data);
        return view('pppoe.show', compact('pppoe'));
    }
}
