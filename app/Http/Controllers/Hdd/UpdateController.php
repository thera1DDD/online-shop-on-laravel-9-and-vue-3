<?php

namespace App\Http\Controllers\Hdd;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Hdd;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(\App\Http\Requests\Hdd\UpdateRequest $request,Hdd $hdd)
    {
        $data =$request->validated();
        $hdd->update($data);
        return view('hdd.show', compact('hdd'));
    }
}
