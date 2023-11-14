<?php

namespace App\Http\Controllers\Intercom;

use App\Http\Controllers\Controller;
use http\Env\Url;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('intercom.create');
    }
}
