<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\TelegramApi\Api;

class BotController extends Controller
{
    public function start()
    {

        $api = new Api('6689708735:AAGun_4CCyaxSxEJYz-0JFVwgHFNg5HjWN4');

        $res = $api->send('getme');
        dd($res);


        //long polling ----- set web hook

//        $response = Http::get('https://api.telegram.org/bot6689708735:AAGun_4CCyaxSxEJYz-0JFVwgHFNg5HjWN4/sendMessage?chat_id=111918050&text=smaple_text');
//        dd($response->body());
    }

    public function dashboard()
    {
        return view();
    }
}
