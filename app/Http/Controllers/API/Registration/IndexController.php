<?php

namespace App\Http\Controllers\API\Registration;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Users\StoreRequest;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
       $data = $request->validated();
       $user = User::create($data);
       return $user;
    }
}
