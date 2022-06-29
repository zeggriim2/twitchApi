<?php


namespace App\Services\TwitchApi\Model\Game;


class Game
{
    private string $box_art_url;
    private string $id;
    private string $name;

    /**
     * @return string
     */
    public function getBoxArtUrl(): string
    {
        return $this->box_art_url;
    }

    /**
     * @param string $box_art_url
     * @return Game
     */
    public function setBoxArtUrl(string $box_art_url): self
    {
        $this->box_art_url = $box_art_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Game
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Game
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}