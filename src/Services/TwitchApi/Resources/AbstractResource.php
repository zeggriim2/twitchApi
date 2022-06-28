<?php

namespace App\Services\TwitchApi\Resources;

use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

abstract class AbstractResource
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

    protected function constructQueryParamArray(array $queryParams): array
    {
        $queryArrayParams = [];
        foreach ($queryParams as $param) {
            if (null !== $param['value']) {
                if (is_bool($param['value'])) {
                    $param['value'] = (int) $param['value'];
                }
                $queryArrayParams[$param['key']] = $param['value'];
            }
        }

        return $queryArrayParams;
    }

    protected function constructUrl(string $urlEndPoint)
    {
        return self::BASE_URI . $urlEndPoint;
    }

    protected function constructHeaders($bearer): array
    {
        return [
            'headers' => [
                'Authorization' => 'Bearer ' . $bearer,
                'Client-Id' => $this->clientId,
            ]
        ];
    }
}
