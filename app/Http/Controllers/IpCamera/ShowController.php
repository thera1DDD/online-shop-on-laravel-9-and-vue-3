<?php

namespace App\Http\Controllers\IpCamera;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Product;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(IpCamera $camera, Category $categories, Megapixels $megapixels)
    {
        return view('camera.show',compact('camera','categories','megapixels'));
    }
}
