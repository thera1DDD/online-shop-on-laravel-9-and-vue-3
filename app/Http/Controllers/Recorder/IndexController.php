<?php

namespace App\Http\Controllers\Recorder;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Product;
use App\Models\Recorder;
use Illuminate\Http\Request;
use Psy\Output\ProcOutputPager;

class IndexController extends Controller
{
    public function __invoke()
    {

        $recorders = Recorder::all();
        $categories = Category::all();
        return view('recorder.index', compact('recorders','categories'));
    }
}
