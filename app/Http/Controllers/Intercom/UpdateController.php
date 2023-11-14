<?php

namespace App\Http\Controllers\Intercom;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Http\Requests\PPPoe\StoreRequest;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Intercom;
use App\Models\Pppoe;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(\App\Http\Requests\Intercom\UpdateRequest $request,Intercom $intercom)
    {
        $data =$request->validated();
        $intercom->update($data);
        return view('intercom.show', compact('intercom'));
    }
}
