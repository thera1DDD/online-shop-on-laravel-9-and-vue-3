<?php

namespace App\Http\Controllers\PPPoe;

use App\Http\Controllers\Controller;
use http\Env\Url;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('pppoe.create');
    }
}
