<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\TelegramApi\Api;

class BotController extends Controller
{
    protected const API_KEY = '6689708735:AAGun_4CCyaxSxEJYz-0JFVwgHFNg5HjWN4';

    public function sendMessage(Request $request)
    {
        $api = new Api(self::API_KEY);

        $response = $api->send(
            $request->input('method'),
            [
                'chat_id' => $request->input('chat_id'),
                'text' => $request->input('message')
            ]);

        return redirect('dashboard');


        //long polling ----- set web hook
//        $response = Http::get('https://api.telegram.org/bot6689708735:AAGun_4CCyaxSxEJYz-0JFVwgHFNg5HjWN4/sendMessage?chat_id=111918050&text=smaple_text');
//        dd($response->body());
    }

    public function dashboard()
    {
//        $api = new Api();
        return view('dashboard');
    }
}
