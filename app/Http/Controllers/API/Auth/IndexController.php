<?php

namespace App\Http\Controllers\API\Auth;

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
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * @throws \Exception
     */
    public function __invoke(Request $request)
    {
      $credentials = $request->only('email', 'password');
      if($request->input('email') == null or $request->input('password') == null){
          return response()->json(['error' => 'Fields is empty'], 401);
      }
      $user = User::where('email', $request->input('email'))->first();
      if(!$user){
          return response()->json(['error' => 'Invalid credentials or user does not exist'], 401);
      }
      // Аутентификация пользователя
      if (Auth::attempt($credentials)) {
          // Аутентификация успешна

          // Получение пользователя
          $user = Auth::user();
          $token = bin2hex(random_bytes(32));
          // Генерация токена

          return response()->json([
              'token' => $token,
              'user' => $user,
              'status' => true
          ], 200);
      } else {
          return response()->json(['error' => 'Invalid credentials or user does not exist'], 401);
      }
  }
}
