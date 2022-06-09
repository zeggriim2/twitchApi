<?php

namespace App\Services\TwitchApi\Resources;

use App\Services\TwitchApi\model\Oauth;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class OauthApi extends AbstractResource
{
    private const OAUTH_URI = 'https://id.twitch.tv/oauth2/token';
    /**
     * @var string
     */
    private string $clientId;

    /**
     * @var string
     */
    private string $secretId;

    /**
     * @var HttpClientInterface
     */
    private HttpClientInterface $client;

    /**
     * @var DenormalizerInterface
     */
    private DenormalizerInterface $denormalizer;

    /**
     * @return Oauth
     */
    public function getAppAccessToken(): Oauth
    {
        $headers = [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ];

        $body = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->clientId,
            'client_secret' => $this->secretId,
        ];

        $response = $this->client->request(
            'POST',
            self::OAUTH_URI,
            [
                'headers' => $headers,
                'body' => $body,
            ]
        );

        if($response->getStatusCode() === Response::HTTP_OK){
            return  $this->denormalizer->denormalize($response->toArray(), Oauth::class);
        }
    }
}
