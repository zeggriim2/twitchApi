<?php

namespace App\Services\TwitchApi\model;

class SearchChannels
{
    private string $broadcaster_language;
    private string $broadcaster_login;
    private string $display_name;
    private string $game_id;
    private string $game_name;
    private string $id;
    private string $isLive;
    private array  $tagIds;
    private string $thumbnail_url;
    private string $title;
    private string $started_at;

    public function getBroadcasterLanguage(): string
    {
        return $this->broadcaster_language;
    }

    public function setBroadcasterLanguage(string $broadcaster_language): self
    {
        $this->broadcaster_language = $broadcaster_language;

        return $this;
    }

    public function getBroadcasterLogin(): string
    {
        return $this->broadcaster_login;
    }

    public function setBroadcasterLogin(string $broadcaster_login): self
    {
        $this->broadcaster_login = $broadcaster_login;

        return $this;
    }

    public function getDisplayName(): string
    {
        return $this->display_name;
    }

    public function setDisplayName(string $display_name): self
    {
        $this->display_name = $display_name;

        return $this;
    }

    public function getGameId(): string
    {
        return $this->game_id;
    }

    public function setGameId(string $game_id): self
    {
        $this->game_id = $game_id;

        return $this;
    }

    public function getGameName(): string
    {
        return $this->game_name;
    }

    public function setGameName(string $game_name): self
    {
        $this->game_name = $game_name;

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

    public function getIsLive(): string
    {
        return $this->isLive;
    }

    public function setIsLive(string $isLive): self
    {
        $this->isLive = $isLive;

        return $this;
    }

    public function getTagIds(): array
    {
        return $this->tagIds;
    }

    public function setTagIds(array $tagIds): self
    {
        $this->tagIds = $tagIds;

        return $this;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnail_url;
    }

    public function setThumbnailUrl(string $thumbnail_url): self
    {
        $this->thumbnail_url = $thumbnail_url;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getStartedAt(): string
    {
        return $this->started_at;
    }

    public function setStartedAt(string $started_at): self
    {
        $this->started_at = $started_at;

        return $this;
    }
}
