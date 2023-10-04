<?php

namespace App\Modules\User\Transformers\Api;

use Illuminate\Http\Resources\Json\Resource;

class UserResource extends Resource
{
    /**
     * @var
     */
    private $auth;

    /**
     * Create a new resource instance.
     *
     * @param  mixed  $resource
     * @return void
     */
    public function __construct($resource)
    {
        parent::__construct($resource);
        $this->resource = $resource;
    }

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'token' => $this->token
        ];
    }

}

