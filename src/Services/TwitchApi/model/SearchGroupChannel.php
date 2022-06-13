<?php

namespace App\Services\TwitchApi\model;

class SearchGroupChannel
{
    /**
     * @var SearchChannels[]
     */
    private array $data;

    private array $pagination;

    /**
     * @return SearchCategorie[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param SearchCategorie[] $data
     *
     * @return SearchGroupChannel
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return array
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @return SearchGroupChannel
     */
    public function setPagination(array $pagination): self
    {
        $this->pagination = $pagination;

        return $this;
    }
}
