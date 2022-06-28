<?php


namespace App\Services\TwitchApi\Resources;


use App\Services\TwitchApi\Model\ChatBadgesGroup;
use App\Services\TwitchApi\Model\ChatEmotesGroup;
use App\Services\TwitchApi\Model\ChatEmotesSetGroup;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ChatApi extends AbstractResource
{
    private const URI_CHAT_EMOTES = '/chat/emotes';
    private const URI_CHAT_EMOTES_GLOBAL = '/chat/emotes/global';
    private const URI_CHAT_EMOTES_SETS = '/chat/emotes/set';
    private const URI_CHAT_CHANNELS_BADGES = '/chat/badges';
    private const URI_CHAT_GLOBAL_BADGES = '/chat/badges/global';

    public function getChannelsEmotes(
        string $bearer,
        ?string $broadcasterId
    ): ?ChatEmotesGroup
    {
        $queryParams = [];

        $queryParams[] = ['key' => 'broadcaster_id', 'value' => $broadcasterId];

        $queryArrayParams = $this->constructQueryParamArray($queryParams);

        $url = $this->constructUrl(self::URI_CHAT_EMOTES);

        $options = $this->constructHeaders($bearer);
        $options['query'] = $queryArrayParams;

        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );

        if ($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), ChatEmotesGroup::class);
        }

        return null;
    }

    public function getGlobalEmotes(
        string $bearer
    ): ?ChatEmotesGroup
    {
        $url = $this->constructUrl(self::URI_CHAT_EMOTES_GLOBAL);

        $options = $this->constructHeaders($bearer);

        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );

        if ($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), ChatEmotesGroup::class);
        }
        return null;
    }

    public function getEmoteSet(
        string $bearer,
        ?string $emotesSetId
    ): ?ChatEmotesSetGroup
    {
        $queryParams = [];

        $queryParams[] = ['key' => 'emote_set_id', 'value' => $emotesSetId];

        $queryArrayParams = $this->constructQueryParamArray($queryParams);

        $url = $this->constructUrl(self::URI_CHAT_EMOTES_SETS);

        $options = $this->constructHeaders($bearer);
        $options['query'] = $queryArrayParams;

        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );
        if ($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), ChatEmotesSetGroup::class);
        }

        return null;
    }

    public function getEmoteSets(
        string $bearer,
        ?array $emotesSetIds
    ): ?ChatEmotesSetGroup
    {
        $queryParams = [];
        $queryParams[] = ['key' => 'emote_set_id', 'value' => $emotesSetIds];

        $queryArrayParams = $this->constructQueryParamArray($queryParams);

        $url = $this->constructUrl(self::URI_CHAT_EMOTES_SETS);

        $options = $this->constructHeaders($bearer);
        $options['query'] = $queryArrayParams;

        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );
        if ($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), ChatEmotesSetGroup::class);
        }

        return null;
    }

    public function getChannelBadges(
        string $bearer,
        ?string $broadcasterId
    ): ?ChatBadgesGroup
    {
        $queryParams = [];

        $queryParams[] = ['key' => 'broadcaster_id', 'value' => $broadcasterId];

        $queryArrayParams = $this->constructQueryParamArray($queryParams);

        $url = $this->constructUrl(self::URI_CHAT_CHANNELS_BADGES);

        $options = $this->constructHeaders($bearer);
        $options['query'] = $queryArrayParams;


        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );

        if ($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), ChatBadgesGroup::class);
        }
        return null;
    }

    public function getGlobalBadges(
        string $bearer
    ): ?ChatBadgesGroup
    {
        $options = $this->constructHeaders($bearer);

        $url = $this->constructUrl(self::URI_CHAT_GLOBAL_BADGES);

        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );

        if($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), ChatBadgesGroup::class);
        }

        return null;
    }
}