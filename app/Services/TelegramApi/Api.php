<?php

namespace App\Services\TelegramApi;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;


class Api
{

    protected $SERVER = 'https://api.telegram.org/bot';

    protected $token ;
    protected $connect_time_out;
    protected $time_out;
    protected $http;

    public function __construct($token, $connect_time_out = 10, $time_out = 15)
    {
        $this->token = $token;
        $this->connect_time_out = $connect_time_out;
        $this->time_out = $time_out;
    }


    //sendMessage telegram method
    public function send(string $method, array $params = [], string|null $token = null): object
    {
        $response = Http::get($this->SERVER . $this->token .'/' .$method,$params);

        return $response;

    }

    public function show(string $method, array $params = [], string|null $token = null)
    {


    }


//    public function send(string $method, array|null $params = [] , string|null $token = null): object
//    {
//        foreach ($params as &$item) {
//            if (is_array($item)) {
//                $item = json_encode($item);
//            }
//            $response = $this->gzl->get('/', 'bot' . ($token ?? $this->token) . '/' . $method, ['query' => $params]);
//            return json_decode($response->getBody());
//        }
//    }

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    public function setServer($server)
    {
        $this->SERVER = $server;
        $this->create();
        return $this;

    }



}
