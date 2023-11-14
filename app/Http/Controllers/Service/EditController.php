<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Pppoe;
use App\Models\Service;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Service $service)
    {
        return view('service.edit',compact('service'));
    }
}
