<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BaseApiResource extends JsonResource
{
    public $statusCode;
    public $message;
    public $resource;
    public $status;

    /**
     * Initialize of Resource
     *
     * @param mixed $resource
     * @param mixed $message
     * @param string $statusCode
     * @param string $status
     */

    public function __construct($resource = null, $message = null, $statusCode = '200', $status = 'success')
    {
        $this->resource = $resource;
        $this->message = $message;
        $this->statusCode = $statusCode;
        $this->status = $status;

        parent::__construct($resource);
    }

    public function withResponse($request, $response)
    {
        $response->setStatusCode($this->statusCode);
    }

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'statusCode' => $this->statusCode,
            'status' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
}
