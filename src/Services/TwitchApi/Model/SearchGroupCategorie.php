<?php

namespace App\Services\TwitchApi\Model;

use App\Services\TwitchApi\Model\Search\SearchCategorie;

class SearchGroupCategorie
{
    /**
     * @var SearchCategorie[]
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
     * @return SearchGroupCategorie
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
     * @return SearchGroupCategorie
     */
    public function setPagination(array $pagination): self
    {
        $this->pagination = $pagination;

        return $this;
    }
}
