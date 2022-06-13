<?php

namespace App\Services\TwitchApi\Resources;

use App\Services\TwitchApi\model\SearchGroupCategorie;
use App\Services\TwitchApi\model\SearchGroupChannel;
use Symfony\Component\HttpFoundation\Response;

class SearchApi extends AbstractResource
{
    private const URI_SEARCH_CATEGORIES = '/search/categories';
    private const URI_SEARCH_CHANNELS = '/search/channels';

    /**
     * @param string   $query // URl encoded search query
     * @param int|null $first // Maximum number of objects to return. Max :100 Default:20
     */
    public function searchCategories(
        string $bearer,
        string $query,
        int $first = null,
        string $after = null
    ): ?SearchGroupCategorie {
        $queryParams = [];
        $options = [];

        $queryParams[] = ['key' => 'query', 'value' => $query];

        if ($first) {
            $queryParams[] = ['key' => 'first', 'value' => $first];
        }

        if ($after) {
            $queryParams[] = ['key' => 'after', 'value' => $after];
        }

        // Construire URI
        $queryArrayParams = $this->constructQueryParamArray($queryParams);

        $url = $this->constructUrl(self::URI_SEARCH_CATEGORIES);

        // Construire Headers
        $options['headers'] = $this->constructHeaders($bearer);
        $options['query'] = $queryArrayParams;

        $response = $this->client->request(
            'GET',
            $url,
            $options
        );

        if (Response::HTTP_OK === $response->getStatusCode()) {
            return $this->denormalizer->denormalize($response->toArray(), SearchGroupCategorie::class);
        }

        return null;
    }

    public function searchChannels(
        string $bearer,
        string $query,
        bool $liveOn = false,
        int $first = null,
        string $after = null
    ): ?SearchGroupChannel {
        $queryParams = [];
        $options = [];

        $queryParams[] = ['key' => 'query', 'value' => $query];
        $queryParams[] = ['key' => 'live_only', 'value' => $liveOn];

        if ($first) {
            $queryParams[] = ['key' => 'first', 'value' => $first];
        }

        if ($after) {
            $queryParams[] = ['key' => 'after', 'value' => $after];
        }

        $queryArrayParams = $this->constructQueryParamArray($queryParams);

        $url = $this->constructUrl(self::URI_SEARCH_CHANNELS);

        // Construire Headers
        $options['headers'] = $this->constructHeaders($bearer);
        $options['query'] = $queryArrayParams;

        $response = $this->client->request(
            'GET',
            $url,
            $options
        );

        if (Response::HTTP_OK === $response->getStatusCode()) {
            return $this->denormalizer->denormalize($response->toArray(), SearchGroupChannel::class);
        }

        return null;
    }
}
