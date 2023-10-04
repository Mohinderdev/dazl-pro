<?php

namespace App\Core\Response\Api;

use Illuminate\Routing\ResponseFactory;

class RespondWithJsonData
{
    protected $data;
    protected $status;
    protected $code;
    protected $headers;

    public function __construct($data, int $status = 200, int $code = 0, array $headers = [])
    {
        $this->data     = $data;
        $this->status   = $status;
        $this->code     = $code;
        $this->headers  = $headers;
    }

    public function handle(ResponseFactory $factory)
    {
        $response = [
            'data' => $this->data,
            'code' => $this->code
        ];

        return $factory->json($response, $this->status, $this->headers);
    }
}
