<?php

namespace App\Http\Controllers\Recorder;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Channel;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Product;
use App\Models\Recorder;
use Illuminate\Http\Request;
use Psy\Output\ProcOutputPager;

class EditController extends Controller
{
    public function __invoke(Recorder $recorder)
    {
        $channels = Channel::all();
        $categories = Category::all();
        return view('recorder.edit', compact('recorder','channels','categories'));
    }
}
