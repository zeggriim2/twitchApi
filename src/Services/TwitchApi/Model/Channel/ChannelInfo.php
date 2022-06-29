<?php


namespace App\Services\TwitchApi\Model\Channel;


class ChannelInfo
{
    private string $broadcaster_id;
    private string $broadcaster_login;
    private string $broadcaster_name;
    private string $broadcaster_language;
    private string $game_id;
    private string $game_name;
    private string $title;
    private int $delay;

    /**
     * @return string
     */
    public function getBroadcasterId(): string
    {
        return $this->broadcaster_id;
    }

    /**
     * @param string $broadcaster_id
     * @return ChannelInfo
     */
    public function setBroadcasterId(string $broadcaster_id): self
    {
        $this->broadcaster_id = $broadcaster_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getBroadcasterLogin(): string
    {
        return $this->broadcaster_login;
    }

    /**
     * @param string $broadcaster_login
     * @return ChannelInfo
     */
    public function setBroadcasterLogin(string $broadcaster_login): self
    {
        $this->broadcaster_login = $broadcaster_login;
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
     * @return ChannelInfo
     */
    public function setBroadcasterName(string $broadcaster_name): self
    {
        $this->broadcaster_name = $broadcaster_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getBroadcasterLanguage(): string
    {
        return $this->broadcaster_language;
    }

    /**
     * @param string $broadcaster_language
     * @return ChannelInfo
     */
    public function setBroadcasterLanguage(string $broadcaster_language): self
    {
        $this->broadcaster_language = $broadcaster_language;
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
     * @return ChannelInfo
     */
    public function setGameId(string $game_id): self
    {
        $this->game_id = $game_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getGameName(): string
    {
        return $this->game_name;
    }

    /**
     * @param string $game_name
     * @return ChannelInfo
     */
    public function setGameName(string $game_name): self
    {
        $this->game_name = $game_name;
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
     * @return ChannelInfo
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return int
     */
    public function getDelay(): int
    {
        return $this->delay;
    }

    /**
     * @param int $delay
     * @return ChannelInfo
     */
    public function setDelay(int $delay): self
    {
        $this->delay = $delay;
        return $this;
    }
}