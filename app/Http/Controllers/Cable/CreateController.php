<?php

namespace App\Http\Controllers\Cable;

use App\Http\Controllers\Controller;
use http\Env\Url;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('cable.create');
    }
}
