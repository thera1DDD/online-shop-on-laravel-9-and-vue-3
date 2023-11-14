<?php

namespace App\Http\Controllers\Intercom;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Intercom;
use App\Models\Pppoe;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $intercoms = Intercom::all();
        return view('intercom.index',compact('intercoms'));
    }
}
