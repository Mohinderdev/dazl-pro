<?php

namespace App\Core\Response\Api;

use Illuminate\Routing\ResponseFactory;

class RespondWithJsonError
{
    protected $message;
    protected $status;
    protected $code;
    protected $headers;

    public function __construct(string $message, int $status = 200, int $code = 0, array $headers = [])
    {
        $this->message  = $message;
        $this->status   = $status;
        $this->code     = $code;
        $this->headers  = $headers;
    }

    public function handle(ResponseFactory $factory)
    {
        $response = [
            'errors' => [
                'message' => [$this->message],
            ],
            'code' => $this->code,
        ];

        return $factory->json($response, $this->status, $this->headers);
    }
}
