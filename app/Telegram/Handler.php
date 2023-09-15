<?php

namespace App\Telegram;

use App\Models\Client;
use DefStudio\Telegraph\Handlers\WebhookHandler;
use Illuminate\Support\Facades\Auth;

class Handler extends WebhookHandler
{
    public function start(): void
    {
        $credentials = $this->request['message']['from'];
        $client = Client::query()
            ->firstOrCreate([
                'id' => $credentials['id'],
                'first_name' => $credentials['first_name'],
                'last_name' => $credentials['last_name'],
                'username' => $credentials['username'],
            ]);
        Auth::login($client);
        session()->start();
        $this->reply('Click Menu Button');
    }
}
