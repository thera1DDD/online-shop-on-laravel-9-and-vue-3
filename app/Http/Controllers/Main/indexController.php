<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Orders;
use App\Models\User;

class indexController extends Controller
{
    public function __invoke()
    {
        if(Orders::all() || IpCamera::all()|| User::all()|| Category::all()){
            $ordersCount = Orders::count();
            $camsCount = IpCamera::count();
            $usersCount = User::count();
            $categoryCount = Category::count();
            return view('main.index',compact('ordersCount','camsCount','usersCount','categoryCount'));
        }

    }
}
