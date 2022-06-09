<?php


namespace App\Services\TwitchApi\Resources;


class SearchApi extends AbstractResource
{
    public function searchCategories(
        string $bearer,
        string $query,
        string $first = null,
        string $after = null
    )
    {
        $queryParams = [];

        $queryParams = ['key' => 'query', 'value' => $query];

        if($first) {
            $queryParams = ['key' => 'first', 'value' => $first];
        }

        if($after) {
            $queryParams = ['key' => 'after', 'value' => $after];
        }

        return $this->getApi('/search/categories', $bearer, $queryParams);
    }
}