<?php

namespace App\Http\Controllers\Cable;

use App\Http\Controllers\Controller;
use App\Models\Cable;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Pppoe;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Cable $cable)
    {
        return view('cable.edit',compact('cable'));
    }
}
