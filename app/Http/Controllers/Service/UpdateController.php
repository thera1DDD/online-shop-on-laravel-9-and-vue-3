<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Http\Requests\PPPoe\StoreRequest;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Pppoe;
use App\Models\Service;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(\App\Http\Requests\Service\UpdateRequest $request,Service $service)
    {
        $data =$request->validated();
        $service->update($data);
        return view('service.show', compact('service'));
    }
}
