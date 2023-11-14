<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class IndexController extends Controller
{
   public function __invoke()
   {
       $order = Orders::all();
       return view('order.index',compact('order'));
   }
}
