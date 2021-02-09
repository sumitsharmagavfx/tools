<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ApiHelper
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    protected function requestAnalyzeApi($url)
    {
        $response = $this->client->get(env('TECHNOLOGY_LOOKUP_API_URL') . "api/analyze?url=$url");
        return \GuzzleHttp\json_decode($response->getBody(), 1);
    }
}
