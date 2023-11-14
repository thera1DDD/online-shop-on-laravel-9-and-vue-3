<?php

namespace App\Http\Controllers\Intercom;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Intercom;
use App\Models\Pppoe;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Intercom $intercom)
    {
        return view('intercom.edit',compact('intercom'));
    }
}
