<?php

namespace App\Http\Controllers\Intercom;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hdd;
use App\Models\Intercom;
use App\Models\Pppoe;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Intercom $intercom)
    {
        $intercom->delete();
        return redirect()->route('intercom.index');
    }
}
