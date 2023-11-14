<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Pppoe;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();
        return view('service.index',compact('services'));
    }
}
