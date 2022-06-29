<?php


namespace App\Services\TwitchApi\Resources;

use App\Services\TwitchApi\Model\GameGroup;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GameApi extends AbstractResource
{
    private const URI_GAME = "/games";
    private const URI_GAME_TOP = "/games/top";

    public function getGameById(
        string $bearer,
        ?string $id = null
    ): ?GameGroup
    {
        $queryParams = [];

        if ($id) {
            $queryParams[] = ['key' => 'id', 'value' => $id];
        }

        $queryArrayParams = $this->constructQueryParamArray($queryParams);

        $url = $this->constructUrl(self::URI_GAME);

        $options = $this->constructHeaders($bearer);
        $options['query'] = $queryArrayParams;

        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );

        if ($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), GameGroup::class);
        }

        return null;
    }

    public function getGameByName(
        string $bearer,
        ?string $name = null
    ): ?GameGroup
    {
        $queryParams = [];

        if ($name) {
            $queryParams[] = ['key' => 'name', 'value' => $name];
        }

        $queryArrayParams = $this->constructQueryParamArray($queryParams);

        $url = $this->constructUrl(self::URI_GAME);

        $options = $this->constructHeaders($bearer);
        $options['query'] = $queryArrayParams;

        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );

        if ($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), GameGroup::class);
        }

        return null;
    }

    public function getGameTop(
        string $bearer
    ): ?GameGroup
    {
        $url = $this->constructUrl(self::URI_GAME_TOP);

        $options = $this->constructHeaders($bearer);
        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );

        if ($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), GameGroup::class);
        }
        return null;
    }
}