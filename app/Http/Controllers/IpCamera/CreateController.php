<?php

namespace App\Http\Controllers\IpCamera;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Megapixels;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {

        $categories = Category::all();
        $megapixels = Megapixels::all();
        return view('camera.create',compact('categories','megapixels'));
    }
}
