<?php


namespace App\ThirdParties\AttomData;

use GuzzleHttp\Client;

class AttomData
{
    private string $baseUrl = "#";
    private Client $client;
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getAddress(string $address)
    {
        $addresses = "?address=$address";

        return $this->client->request(
            'GET',
            $this->baseUrl.$addresses,
            [
                "headers" => [
                    "X-RapidAPI-Host"=>"realty-mole-property-api.p.rapidapi.com",
                    "X-RapidAPI-Key"=>"7fd4ebf4e2msh2a92a218e2f2038p1f6f1ajsnc057bbfd30f1",

                ]
            ]
        );
    }

}
