<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Symfony\Component\HttpClient\HttpClient;
use Telegram\Bot\Laravel\Facades\Telegram;

class SendTelegramNotification extends Command
{
    protected $signature = 'send:order-notification {chat_id}';

    protected $description = 'Send an order notification to a Telegram chat';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $chatId = $this->argument('chat_id');
        $message = 'Успешно создан новый заказ!';

        $httpClient = HttpClient::create([
            'verify_peer' => false,
            'verify_host' => false,
        ]);

        try {
            $response = $httpClient->request('POST', "https://api.telegram.org/bot6510585249:AAHOKrRKxiAdHWxPdw8prly-6fsz7vYPtoE/sendMessage", [
                'json' => [
                    'chat_id' => $chatId,
                    'text' => $message,
                ],
            ]);

            $statusCode = $response->getStatusCode();

            if ($statusCode === 200) {
                $this->info('Уведомление отправлено в Telegram');
            } else {
                $this->error('Не удалось отправить уведомление. Код статуса: ' . $statusCode);
                $content = $response->getContent(false);
                $this->error('Текст ошибки: ' . $content);
            }
        } catch (\Exception $e) {
            $this->error('Произошла ошибка: ' . $e->getMessage());
        }
    }

}
