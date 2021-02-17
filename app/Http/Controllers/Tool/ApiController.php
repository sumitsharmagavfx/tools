<?php

namespace App\Http\Controllers\Tool;

use App\Http\Controllers\Controller;
use App\Http\Resources\BaseApiResource;
use Illuminate\Http\Request;
use App\Traits\ApiHelper;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class ApiController extends Controller
{
    use ApiHelper;

    public function analyzeTechnology(Request $request)
    {
        $url = $request->get('url');
        $ipAddress = $request->ip();
        $cacheKey = "$ipAddress-$url";

        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return new BaseApiResource(null, 'URL is not valid', 422, 'danger');
        }

        try {
            $response = Redis::get($cacheKey);
            if (!$response) {
                $response = $this->requestAnalyzeApi($url);
                if ($response['statusCode'] === 429) {
                    // get latest key remaining time
                    $keys = Redis::keys("*$ipAddress*");
                    $minimumTime = 60 * 60 * 24 * 30;
                    $currentKey = null;
                    foreach ($keys as $key) {
                        $_key = str_replace(config('database.redis.options.prefix'), "", $key);
                        $currentTime = Redis::ttl("$_key");
                        $minimumTime = $minimumTime > $currentTime ? $currentTime : $minimumTime;
                    }

                    return new BaseApiResource(['current_time' => $minimumTime], $response['message'], $response['statusCode'], 'danger');
                }

                Redis::set($cacheKey, json_encode($response));
                Redis::expire($cacheKey, 60 * 60);
            } else {
                $response = json_decode($response, true);
            }

            return new BaseApiResource($response['data'], $response['message'], $response['statusCode']);
        } catch (\Exception $exception) {
            return new BaseApiResource(null, 'Please Install Redis on your server', 500);
        }
    }

    protected function analyzeHreflang(Request $request)
    {
        $url = $request->get('url');

        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            return new BaseApiResource(null, 'URL is not valid', 422, 'danger');
        }

        $response = $this->requestHreflangChecker($url);
        return new BaseApiResource($response['data'], $response['statusText'], $response['statusCode']);
    }
}
