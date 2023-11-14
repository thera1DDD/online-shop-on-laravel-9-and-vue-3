<?php

namespace App\Http\Controllers\Cable;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Cable;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Pppoe;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cables = Cable::all();
        return view('cable.index',compact('cables'));
    }
}
