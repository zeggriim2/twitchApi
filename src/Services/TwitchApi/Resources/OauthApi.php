<?php

namespace App\Services\TwitchApi\Resources;

use App\Services\TwitchApi\model\Oauth;
use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class OauthApi
{
    private const OAUTH_URI = 'https://id.twitch.tv/oauth2/token';

    private string $secretId;
    private string $clientId;
    private HttpClientInterface $client;
    private DenormalizerInterface $denormalizer;

    /**
     * OauthApi constructor.
     */
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

    public function getAppAccessToken(): ?Oauth
    {
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];

        $body = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->secretId,
        ];
        try {
            $response = $this->client->request(
                'POST',
                self::OAUTH_URI,
                [
                    'headers' => $headers,
                    'body' => $body,
                ]
            );
        } catch (Exception $exception) {
            return null;
        }

        if (Response::HTTP_OK === $response->getStatusCode()) {
            return $this->denormalizer->denormalize($response->toArray(), Oauth::class);
        }

        return null;
    }
}
