<?php

namespace App\Http\Controllers\API\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\Users\StoreRequest;
use App\Http\Resources\IpCamera\IpCameraResource;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\IpCamera;
use App\Models\Megapixels;
use App\Models\Orders;
use App\Models\Product;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpClient\HttpClient;

class OrderReadyController extends Controller
{
    public function handleTelegramRequest(Request $request)
    {
        $update = $request->json()->all();

        if (isset($update["message"]["text"])) {
            $text = $update["message"]["text"];

            if (strpos($text, '/ready') === 0) {
                $commandParts = explode(' ', $text);
                $orderId = isset($commandParts[1]) ? intval($commandParts[1]) : null;

                if ($orderId !== null && is_numeric($orderId)) {
                    $this->markOrderAsReady($orderId);
                } else {
                    $this->sendMessage("Некорректный номер заказа. Используйте /ready [номер заказа]");
                }
            }
        }
    }

    private function markOrderAsReady($orderId)
    {
        $order = Orders::find($orderId);

        if ($order) {
            $order->is_ready = 1;
            $order->save();
            $this->sendTelegramMessage($orderId);
        }
    }

    private function sendMessage($message)
    {
        $chatId = '353411869'; // Замените на фактический chat_id
        $telegram_bot_token= '6510585249:AAHOKrRKxiAdHWxPdw8prly-6fsz7vYPtoE';
        Http::post("https://api.telegram.org/bot$telegram_bot_token/sendMessage", [
            'chat_id' => $chatId,
            'text' => $message,
        ]);
    }

    private function sendTelegramMessage($orderId)
    {
        $chatId = '353411869'; // Замените на фактический chat_id

        $this->sendMessage("Заказ номер $orderId готов");
    }
}
