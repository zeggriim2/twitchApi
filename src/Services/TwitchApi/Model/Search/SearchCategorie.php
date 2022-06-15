<?php

namespace App\Services\TwitchApi\Model\Search;

class SearchCategorie
{
    private string $box_art_url;
    private string $id;
    private string $name;

    public function getBoxArtUrl(): string
    {
        return $this->box_art_url;
    }

    public function setBoxArtUrl(string $box_art_url): self
    {
        $this->box_art_url = $box_art_url;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
