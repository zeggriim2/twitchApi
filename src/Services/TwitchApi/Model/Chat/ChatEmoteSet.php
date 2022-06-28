<?php


namespace App\Services\TwitchApi\Model\Chat;


class ChatEmoteSet
{
    private string $id;
    private string $name;
    private array $images;
    private string $emote_type;
    private string $emote_set_id;
    private string $owner_id;
    private array $format;
    private array $scale;
    private array $theme_mode;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ChatEmoteSet
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
     * @return ChatEmoteSet
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param array $images
     * @return ChatEmoteSet
     */
    public function setImages(array $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmoteType(): string
    {
        return $this->emote_type;
    }

    /**
     * @param string $emote_type
     * @return ChatEmoteSet
     */
    public function setEmoteType(string $emote_type): self
    {
        $this->emote_type = $emote_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmoteSetId(): string
    {
        return $this->emote_set_id;
    }

    /**
     * @param string $emote_set_id
     * @return ChatEmoteSet
     */
    public function setEmoteSetId(string $emote_set_id): self
    {
        $this->emote_set_id = $emote_set_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwnerId(): string
    {
        return $this->owner_id;
    }

    /**
     * @param string $owner_id
     * @return ChatEmoteSet
     */
    public function setOwnerId(string $owner_id): self
    {
        $this->owner_id = $owner_id;
        return $this;
    }

    /**
     * @return array
     */
    public function getFormat(): array
    {
        return $this->format;
    }

    /**
     * @param array $format
     * @return ChatEmoteSet
     */
    public function setFormat(array $format): self
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @return array
     */
    public function getScale(): array
    {
        return $this->scale;
    }

    /**
     * @param array $scale
     * @return ChatEmoteSet
     */
    public function setScale(array $scale): self
    {
        $this->scale = $scale;
        return $this;
    }

    /**
     * @return array
     */
    public function getThemeMode(): array
    {
        return $this->theme_mode;
    }

    /**
     * @param array $theme_mode
     * @return ChatEmoteSet
     */
    public function setThemeMode(array $theme_mode): self
    {
        $this->theme_mode = $theme_mode;
        return $this;
    }
}