<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Tests\Integration\Queue\Order;
use Illuminate\Support\Str;

class StoreController extends Controller
{
   public function __invoke(StoreRequest $request)
   {
      $data = $request->validated();
      Orders::firstOrCreate($data);
      return redirect()->route('order.index');
   }
}
