<?php

namespace App\Telegram;

use DefStudio\Telegraph\Handlers\WebhookHandler;

class Handler extends WebhookHandler
{
    public function hello(): void
    {
//        Log::info(json_encode($this->message->toArray(), JSON_UNESCAPED_UNICODE));
//        Telegraph::message('hello world')
//            ->keyboard(Keyboard::make()->buttons([
//                Button::make("👀 Open")->url('https://387f-93-171-226-6.ngrok-free.app/'),
//            ]))->send();
    }
}
