<?php

namespace App\Http\Controllers\IpCamera;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\UpdateRequest;
use App\Models\IpCamera;
use App\Models\IpCameraImage;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(\App\Http\Requests\IpCamera\UpdateRequest $request, IpCamera $camera)
    {
        $data = $request->validated();
        if ($request->hasFile('preview_image')) {
            $data['preview_image'] =  Storage::disk('public')->put('/images',$data['preview_image']);
        }
        $camera->update($data);
        return view('camera.show', compact('camera'));
    }
}
