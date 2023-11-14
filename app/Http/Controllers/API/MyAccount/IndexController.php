<?php

namespace App\Http\Controllers\API\MyAccount;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getOrders($usersId): \Illuminate\Database\Eloquent\Collection|array
    {
        return Orders::query()->where('users_id',$usersId)->with('position')->get();
    }
}
