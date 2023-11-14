<?php

namespace App\Http\Controllers\IpCamera;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Product;
use Illuminate\Http\Request;
use Psy\Output\ProcOutputPager;

class IndexController extends Controller
{
    public function __invoke()
    {
        $megapixels = Megapixels::all();
        $cameras = IpCamera::all();
        $categories = Category::all();
        return view('camera.index', compact('cameras','megapixels','categories'));
    }
}
