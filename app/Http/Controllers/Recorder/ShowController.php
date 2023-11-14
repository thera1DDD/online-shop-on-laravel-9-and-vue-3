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

class ShowController extends Controller
{
   public function __invoke(Recorder $recorder,Channel $channels,Category $categories)
   {
       return view('recorder.show',compact('recorder','channels','categories'));
   }
}
