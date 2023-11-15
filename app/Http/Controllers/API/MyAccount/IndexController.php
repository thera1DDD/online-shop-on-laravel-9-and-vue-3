<?php

namespace App\Http\Controllers\API\MyAccount;

use App\Http\Controllers\Controller;
use App\Http\Resources\MyAccount\OrderResource;
use App\Models\Orders;
use GuzzleHttp\Client;
use http\Env;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getOrders($usersId): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
       $orders = Orders::query()->where('users_id',$usersId)->with('position')->get();
       return OrderResource::collection($orders);
    }

    public function delete(Orders $order): ?bool
    {
        $telegram_bot_token= '6510585249:AAHOKrRKxiAdHWxPdw8prly-6fsz7vYPtoE';
        $chat_id = 353411869;

        $httpClient = new Client([
            'verify' => false, // отключение проверки сертификата
        ]);
        $response = $httpClient->post("https://api.telegram.org/bot$telegram_bot_token/sendMessage", [
            'form_params' => [
                'chat_id' => $chat_id,
                'text' => 'Заказ № ' . $order->id . "\nКлиент: " . $order->username . "\nНомер телефона: " . $order->phone_number . "\nСумма: " . $order->total . '₽' . "\nОтменен 🔴",
                'parse_mode' => 'Markdown',
            ],
        ]);




        if ($response->getStatusCode() === 200) {
            // Обработка успешной отправки
            $telegramResponse = json_decode($response->getBody()->getContents(), true);
            // Здесь можно выполнить логирование или отправить ответ пользователю
        } else {
            // Обработка ошибки
            $errorResponse = json_decode($response->getBody()->getContents(), true);
            // Здесь можно выполнить логирование ошибки или отправить сообщение об ошибке пользователю
        }

        return $order->position()->delete() && $order->delete();
    }
}
