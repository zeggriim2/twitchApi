<?php


namespace App\Services\TwitchApi\Resources;


use App\Services\TwitchApi\Model\ClipGroup;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ClipApi extends AbstractResource
{
    private const URI_CLIP = '/clips';

    public function getClipByBroadcasterId(
        string $bearer,
        string $broadcaster_id = null,
        int $first = null,
        string $before = null,
        string $after = null,
        string $startedAt = null,
        string $endAt = null
    ): ?ClipGroup
    {
        $queryParams = [];

        if($broadcaster_id){
            $queryParams[] = ['key' => 'broadcaster_id', 'value' => $broadcaster_id];
        }

        if($first){
            $queryParams[] = ['key' => 'first', 'value' => $first];
        }

        if($before){
            $queryParams[] = ['key' => 'before', 'value' => $before];
        }

        if($after){
            $queryParams[] = ['key' => 'after', 'value' => $after];
        }

        if($startedAt){
            $queryParams[] = ['key' => 'started_at', 'value' => $startedAt];
        }

        if($endAt){
            $queryParams[] = ['key' => 'ended_at', 'value' => $endAt];
        }

        $queryArrayParams = $this->constructQueryParamArray($queryParams);

        $url = $this->constructUrl(self::URI_CLIP);

        $options = $this->constructHeaders($bearer);
        $options['query'] = $queryArrayParams;

        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );

        if ($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), ClipGroup::class);
        }

        return null;
    }
    public function getClipByGameId(
        string $bearer,
        string $game_id = null,
        int $first = null,
        string $before = null,
        string $after = null,
        string $startedAt = null,
        string $endAt = null
    )
    {
        $queryParams = [];

        if($game_id){
            $queryParams[] = ['key' => 'game_id', 'value' => $game_id];
        }

        if($first){
            $queryParams[] = ['key' => 'first', 'value' => $first];
        }

        if($before){
            $queryParams[] = ['key' => 'before', 'value' => $before];
        }

        if($after){
            $queryParams[] = ['key' => 'after', 'value' => $after];
        }

        if($startedAt){
            $queryParams[] = ['key' => 'started_at', 'value' => $startedAt];
        }

        if($endAt){
            $queryParams[] = ['key' => 'ended_at', 'value' => $endAt];
        }

        $queryArrayParams = $this->constructQueryParamArray($queryParams);

        $url = $this->constructUrl(self::URI_CLIP);

        $options = $this->constructHeaders($bearer);
        $options['query'] = $queryArrayParams;

        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );

        if ($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), ClipGroup::class);
        }

        return null;
    }

    public function getClipById(
        string $bearer,
        string $id = null,
        string $before = null,
        string $after = null
    )
    {
        $queryParams = [];

        if($id){
            $queryParams[] = ['key' => 'id', 'value' => $id];
        }

        if($before){
            $queryParams[] = ['key' => 'before', 'value' => $before];
        }

        if($after){
            $queryParams[] = ['key' => 'after', 'value' => $after];
        }

        $queryArrayParams = $this->constructQueryParamArray($queryParams);

        $url = $this->constructUrl(self::URI_CLIP);

        $options = $this->constructHeaders($bearer);
        $options['query'] = $queryArrayParams;

        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );

        if ($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), ClipGroup::class);
        }

        return null;
    }
}