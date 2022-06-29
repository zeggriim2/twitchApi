<?php


namespace App\Services\TwitchApi\Model;


use App\Services\TwitchApi\Model\Game\Game;

class GameGroup
{
    /**
     * @var Game[]
     */
    private array $data;
    private array $paginator;

    /**
     * @return Game[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Game[] $data
     * @return GameGroup
     */
    public function setData(array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return array
     */
    public function getPaginator(): array
    {
        return $this->paginator;
    }

    /**
     * @param array $paginator
     * @return GameGroup
     */
    public function setPaginator(array $paginator): self
    {
        $this->paginator = $paginator;
        return $this;
    }
}