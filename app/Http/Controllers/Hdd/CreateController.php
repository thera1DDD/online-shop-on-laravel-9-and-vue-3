<?php

namespace App\Http\Controllers\Hdd;

use App\Http\Controllers\Controller;
use http\Env\Url;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('hdd.create');
    }
}
