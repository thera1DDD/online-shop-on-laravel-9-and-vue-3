<?php

namespace App\Http\Controllers\API\Telegram;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class IndexController extends Controller
{
    public function __invoke()
    {
        $response = Telegram::getMe();

        dd($response);
    }
}
