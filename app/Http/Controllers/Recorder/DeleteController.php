<?php

namespace App\Http\Controllers\Recorder;

use App\Http\Controllers\Controller;
use App\Models\IpCamera;
use App\Models\IpCameraImage;
use App\Models\Product;
use App\Models\Recorder;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Recorder $recorder,)
    {
        $recorder->delete();
        return redirect()->route('recorder.index');
    }
}
