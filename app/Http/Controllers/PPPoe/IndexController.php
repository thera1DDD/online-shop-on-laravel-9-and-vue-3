<?php

namespace App\Http\Controllers\PPPoe;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Pppoe;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $pppoes = Pppoe::all();
        return view('pppoe.index',compact('pppoes'));
    }
}
