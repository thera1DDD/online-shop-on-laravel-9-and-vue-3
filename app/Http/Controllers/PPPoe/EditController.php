<?php

namespace App\Http\Controllers\PPPoe;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Pppoe;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Pppoe $pppoe)
    {
        return view('pppoe.edit',compact('pppoe'));
    }
}
