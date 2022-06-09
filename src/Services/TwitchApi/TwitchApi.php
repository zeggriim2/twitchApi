<?php

declare(strict_types=1);

namespace App\Services\TwitchApi;

use App\Services\TwitchApi\Resources\OauthApi;
use App\Services\TwitchApi\Resources\SearchApi;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TwitchApi
{
    private const BASE_URI = 'https://id.twitch.tv/oauth2/token';

    /**
     * @var HttpClientInterface
     */
    private HttpClientInterface $client;

    /**
     * @var OauthApi
     */
    private OauthApi $oauthApi;

    public function __construct(
        string $clientId,
        string $secretId,
        HttpClientInterface $client,
        DenormalizerInterface $denormalizer
    ) {
        $this->oauthApi = new OauthApi($clientId, $secretId, $client, $denormalizer);
        $this->searchApi = new SearchApi()
    }

    public function getOauthApi(): OauthApi
    {
        return $this->oauthApi;
    }
}
