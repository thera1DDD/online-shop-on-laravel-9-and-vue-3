<?php

namespace App\Http\Controllers\Recorder;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Channel;
use App\Models\Color;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $channels = Channel::all();
        return view('recorder.create',compact('categories','channels'));
    }
}
