<?php

namespace App\Services\TelegramApi;

use Illuminate\Support\Facades\Http;


class Api
{

    protected $SERVER = 'https://api.telegram.org';

    protected $token;
    protected $connect_time_out;
    protected $time_out;
    protected $gzl;

    public function __construct( $token, $connect_time_out = 10, $time_out = 15)
    {
        $this->token = $token;
        $this->connect_time_out = $connect_time_out;
        $this->time_out = $time_out;
    }

    public function create()
    {
        $this->gzl = new http([
            'base_url' => $this->SERVER,
            'timeout' => $this->time_out,
            'connect_time_out' => $this->connect_time_out,
            'http_errors' => false,
            'headers' => [
                'Accept' => 'application/json',
                'Accept-Encoding' => 'gzip, deflate, br',
            ]

        ]);
    }

    public function send(string $method, array|null $params = [] , string|null $token = null): object
    {
        foreach ($params as &$item) {
            if (is_array($item)) {
                $item = json_encode($item);
            }
            $response = $this->gzl->get('/', 'bot' . ($token ?? $this->token) . '/' . $method, ['query' => $params]);
            return json_decode($response->getBody());
        }
    }

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