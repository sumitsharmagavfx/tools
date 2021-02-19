<?php

namespace App\Traits;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

trait ApiHelper
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    private function request($path, $method = 'GET', $data = []){
        $options = [];
        try {
            if($method === 'GET'){
                $options['query'] = $data;
            } else if($method === 'POST'){
                $options['form_params'] = $data;
            }

            $response = $this->client->request($method, env('TOOLS_API_URL') . $path, $options);

            return $response->getBody()->getContents();
        } catch (ClientException $exception){
            return $exception->getResponse()->getBody()->getContents();
        }
    }

    protected function requestAnalyzeApi($url)
    {
        $response = $this->client->get(env('TECHNOLOGY_LOOKUP_API_URL') . "api/tech-lookup?url=$url");
        return \GuzzleHttp\json_decode($response->getBody(), 1);
    }

    protected function requestHreflangChecker($url)
    {
        $response = $this->request("api/hreflang-checker/check", 'POST', compact('url'));
        return \GuzzleHttp\json_decode($response, 1);
    }
}
