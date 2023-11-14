<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Tests\Integration\Queue\Order;
use Illuminate\Support\Str;

class CreateController extends Controller
{
   public function __invoke()
   {
       $orders = Orders::all();
       return view('order.create',compact('orders'));


   }
}
