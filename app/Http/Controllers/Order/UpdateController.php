<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\UpdateRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Tests\Integration\Queue\Order;
use Illuminate\Support\Str;

class UpdateController extends Controller
{
   public function __invoke(UpdateRequest $request, Orders $order)
   {
       $data = $request->validated();
       $order->update($data);
       return view('order.show', compact('order'));
   }
}
