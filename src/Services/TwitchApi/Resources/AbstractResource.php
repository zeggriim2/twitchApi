<?php


namespace App\Services\TwitchApi\Resources;


use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class AbstractResource
{
    public const BASE_URI = 'https://api.twitch.tv/helix';

    protected string $clientId;
    protected string $secretId;
    protected HttpClientInterface $client;
    protected DenormalizerInterface $denormalizer;

    public function __construct(
        string $clientId,
        string $secretId,
        HttpClientInterface $client,
        DenormalizerInterface $denormalizer
    ) {
        $this->clientId = $clientId;
        $this->secretId = $secretId;
        $this->client = $client;
        $this->denormalizer = $denormalizer;
    }

    protected function getApi(string $uriEndPoint, string $bearer, array $queryParams = [],array $bodyParam = [])
    {
        return $this->sendToApi('GET', $uriEndPoint, $bearer, $queryParams, $bodyParam);
    }

    private function sendToApi(
        string $method,
        string $uriEndPoint,
        string $bearer,
        array $queryParams = [],
        array $bodyParams = []
    )
    {

        return $this->client->request($method);
    }
}