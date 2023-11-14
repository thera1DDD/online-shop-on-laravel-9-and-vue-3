<?php

namespace App\Http\Controllers\Cable;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Http\Requests\PPPoe\StoreRequest;
use App\Models\Cable;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Pppoe;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(\App\Http\Requests\Cable\UpdateRequest $request,Cable $cable)
    {
        $data = $request->validated();
        $cable->update($data);
        return view('cable.show', compact('cable'));
    }
}
