<?php

namespace App\Http\Controllers\API\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Users\StoreRequest;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Orders;
use App\Models\Position;
use App\Models\Product;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpClient\HttpClient;

class PositionController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $products = $request->input('products', []);

            foreach ($products as $product) {
                Position::create($product);
            }

            return response()->json(['message' => 'Products added to the order']);
        } catch (\Exception $e) {
            Log::error('Error adding products to order: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to add products to the order']);
        }
    }
}
