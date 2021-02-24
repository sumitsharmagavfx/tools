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

    private function request($path, $method = 'GET', $data = [])
    {
        $options = [];
        $key = env('TOOLS_API_KEY', 'secret');
        try {
            if ($method === 'GET') {
                $options['query'] = $data;
            } else if ($method === 'POST') {
                $options['form_params'] = $data;
            }

            $response = $this->client->request($method, env('TOOLS_API_URL') . $path . "?key=$key" , $options);
//            dd($response->getBody()->getContents());
            return $response->getBody()->getContents();
        } catch (ClientException $exception) {
            return $exception->getResponse()->getBody()->getContents();
        }
    }

    protected function keywordResearchOverview($data = [])
    {
        $options = [];

        try {
            $options['form_params'] = $data;
            $response = $this->client->get(env('KEYWORD_RESEARCH_API_URL') . 'overview' . "?key=".env('KEYWORD_RESEARCH_KEY') , $options);
            return \GuzzleHttp\json_decode($response->getBody(), 1);
        }catch (ClientException $exception){
            return $exception->getResponse()->getBody()->getContents();
        }


    }

    protected function requestTechLookup($url)
    {
        $response = $this->client->get(env('TECHNOLOGY_LOOKUP_API_URL') . "api/tech-lookup?url=$url");
    }

    protected function requestHreflangChecker($url)
    {
        $response = $this->request("api/hreflang-checker/check", 'POST', compact('url'));
        return \GuzzleHttp\json_decode($response, 1);
    }

    protected function requestLinkAnalyzer($url)
    {
        $response = $this->request("api/link-analyzer/analyze", 'POST', compact('url'));
        return \GuzzleHttp\json_decode($response, 1);
    }
}
