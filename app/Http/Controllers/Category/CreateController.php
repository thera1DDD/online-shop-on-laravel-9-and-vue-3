<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use http\Env\Url;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('category.create');
    }
}
