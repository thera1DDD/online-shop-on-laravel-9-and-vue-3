<?php

namespace App\Http\Controllers\Recorder;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recorder\UpdateRequest;
use App\Models\Category;
use App\Models\Channel;
use App\Models\Color;
use App\Models\Recorder;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Recorder $recorder)
    {
        $data = $request->validated();
        $recorder->update($data);
        return view('recorder.show',compact('recorder'));
    }
}
