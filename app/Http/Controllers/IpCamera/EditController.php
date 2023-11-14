<?php

namespace App\Http\Controllers\IpCamera;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Product;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(IpCamera $camera)
    {
        $categories = Category::all();
        $megapixels = Megapixels::all();
        return view('camera.edit',compact('camera','categories','megapixels'));
    }
}
