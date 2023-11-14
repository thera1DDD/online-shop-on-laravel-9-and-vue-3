<?php

namespace App\Http\Controllers\Hdd;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $hdds = Hdd::all();
        return view('hdd.index',compact('hdds'));
    }
}
