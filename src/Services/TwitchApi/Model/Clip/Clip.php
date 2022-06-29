<?php


namespace App\Services\TwitchApi\Model\Clip;


class Clip
{
    private string $id;
    private string $url;
    private string $embed_url;
    private string $broadcaster_id;
    private string $broadcaster_name;
    private string $creator_id;
    private string $creator_name;
    private string $video_id;
    private string $game_id;
    private string $language;
    private string $title;
    private int $view_count;
    private string $created_at;
    private string $thumbnail_url;
    /**
     * @var int|float
     */
    private $duration;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Clip
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Clip
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmbedUrl(): string
    {
        return $this->embed_url;
    }

    /**
     * @param string $embed_url
     * @return Clip
     */
    public function setEmbedUrl(string $embed_url): self
    {
        $this->embed_url = $embed_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getBroadcasterId(): string
    {
        return $this->broadcaster_id;
    }

    /**
     * @param string $broadcaster_id
     * @return Clip
     */
    public function setBroadcasterId(string $broadcaster_id): self
    {
        $this->broadcaster_id = $broadcaster_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getBroadcasterName(): string
    {
        return $this->broadcaster_name;
    }

    /**
     * @param string $broadcaster_name
     * @return Clip
     */
    public function setBroadcasterName(string $broadcaster_name): self
    {
        $this->broadcaster_name = $broadcaster_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatorId(): string
    {
        return $this->creator_id;
    }

    /**
     * @param string $creator_id
     * @return Clip
     */
    public function setCreatorId(string $creator_id): self
    {
        $this->creator_id = $creator_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatorName(): string
    {
        return $this->creator_name;
    }

    /**
     * @param string $creator_name
     * @return Clip
     */
    public function setCreatorName(string $creator_name): self
    {
        $this->creator_name = $creator_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoId(): string
    {
        return $this->video_id;
    }

    /**
     * @param string $video_id
     * @return Clip
     */
    public function setVideoId(string $video_id): self
    {
        $this->video_id = $video_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameId(): string
    {
        return $this->game_id;
    }

    /**
     * @param string $game_id
     * @return Clip
     */
    public function setGameId(string $game_id): self
    {
        $this->game_id = $game_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return Clip
     */
    public function setLanguage(string $language): self
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Clip
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int
     */
    public function getViewCount(): int
    {
        return $this->view_count;
    }

    /**
     * @param int $view_count
     * @return Clip
     */
    public function setViewCount(int $view_count): self
    {
        $this->view_count = $view_count;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     * @return Clip
     */
    public function setCreatedAt(string $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnailUrl(): string
    {
        return $this->thumbnail_url;
    }

    /**
     * @param string $thumbnail_url
     * @return Clip
     */
    public function setThumbnailUrl(string $thumbnail_url): self
    {
        $this->thumbnail_url = $thumbnail_url;
        return $this;
    }

    /**
     * @return float
     */
    public function getDuration(): float
    {
        return $this->duration;
    }

    /**
     * @param int|float $duration
     * @return Clip
     */
    public function setDuration($duration): self
    {
        $this->duration = $duration;
        return $this;
    }
}