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
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpClient\HttpClient;

class OrderController extends Controller
{

    public function __invoke(Request $request): \Illuminate\Http\JsonResponse
    {
        $imageBase64 = $request->input('screenshot');
        $data = $request->all();
        $order = Orders::create([
            'username' => $data['username'],
            'phone_number' => $data['phone_number'],
            'total' => $data['total'],
            'users_id' => $data['users_id'],
        ]);

        // Раскодируем изображение из base64
        $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $imageBase64));

        // отправка скришота с описанием
        $telegramBotToken = '6510585249:AAHOKrRKxiAdHWxPdw8prly-6fsz7vYPtoE';
        $chatId = '353411869';

        $httpClient = new Client([
            'verify' => false, // отключение проверки сертификата
        ]);

        $response = $httpClient->post("https://api.telegram.org/bot$telegramBotToken/sendPhoto", [
            'multipart' => [
                [
                    'name' => 'chat_id',
                    'contents' => $chatId,
                ],
                [
                    'name' => 'photo',
                    'contents' => $imageData,
                    'filename' => 'screenshot.png',
                ],
                [
                    'name' => 'caption',
                    'contents' => 'Клиент: ' . $data['username'] . "\nНомер телефона: " . $data['phone_number'] . "\nСумма: " .$data['total'] .'₽',
                ],
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

        return response()->json(['data'=> $order,  'success' => true, 'message' => 'successfully']);
    }
}
