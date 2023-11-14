<?php

namespace App\Http\Controllers\Hdd;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hdd;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Hdd $hdd)
    {
        $hdd->delete();
        return redirect()->route('hdd.index');
    }
}
