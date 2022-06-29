<?php


namespace App\Services\TwitchApi\Model;


use App\Services\TwitchApi\Model\Clip\Clip;

class ClipGroup
{
    /**
     * @var Clip[]
     */
    private array $data;
    private ?array $pagination = null;

    /**
     * @return Clip[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Clip[] $data
     * @return ClipGroup
     */
    public function setData(array $data): ClipGroup
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getPagination(): ?array
    {
        return $this->pagination;
    }

    /**
     * @param array|null $pagination
     * @return ClipGroup
     */
    public function setPagination(?array $pagination): ClipGroup
    {
        $this->pagination = $pagination;
        return $this;
    }
}