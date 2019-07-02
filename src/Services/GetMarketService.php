<?php  declare(strict_types = 1);

namespace App\Services;

use GuzzleHttp\ClientInterface;

class GetMarketService
{
    protected $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function makeRequest()
    {
        $response = $this->client->request(
            'GET',
            'https://www.worldcoinindex.com/apiservice/v2getmarkets?'. http_build_query(
                [
                    'key' => 'uDC7ZerZRgoYuZJ3bKL9riD4nL1FHn',
                    'fiat' => 'eur'
                ]
            )
        );
        echo '<pre>';
        foreach (json_decode($response->getBody()->getContents()) as $data) {
                var_dump($data);
        }
        echo '</pre>';

        die();
    }
}