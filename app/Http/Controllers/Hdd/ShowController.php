<?php

namespace App\Http\Controllers\Hdd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hdd;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Hdd $hdd)
    {
        return view('hdd.show',compact('hdd'));
    }
}
