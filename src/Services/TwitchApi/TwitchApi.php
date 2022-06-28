<?php

declare(strict_types=1);

namespace App\Services\TwitchApi;

use App\Services\TwitchApi\Resources\ChatApi;
use App\Services\TwitchApi\Resources\OauthApi;
use App\Services\TwitchApi\Resources\SearchApi;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TwitchApi
{
    private OauthApi $oauthApi;
    private SearchApi $searchApi;
    private ChatApi $chatApi;

    public function __construct(
        string $clientId,
        string $secretId,
        HttpClientInterface $client,
        DenormalizerInterface $denormalizer
    ) {
        $this->oauthApi = new OauthApi($clientId, $secretId, $client, $denormalizer);
        $this->searchApi = new SearchApi($clientId, $secretId, $client, $denormalizer);
        $this->chatApi = new ChatApi($clientId, $secretId, $client, $denormalizer);
    }

    public function getOauthApi(): OauthApi
    {
        return $this->oauthApi;
    }

    public function getSearchApi(): SearchApi
    {
        return $this->searchApi;
    }

    public function getChatApi(): ChatApi
    {
        return $this->chatApi;
    }
}
