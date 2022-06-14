<?php


namespace App\Services\TwitchApi\Model\Chat;


class ChatGlobalEmotes
{
    private string  $id;
    private string  $name;
    private array   $images;
    private array   $format;
    private array   $scale;
    private array   $theme_mode;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ChatGlobalEmotes
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
     * @return ChatGlobalEmotes
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
     * @return ChatGlobalEmotes
     */
    public function setImages(array $images): self
    {
        $this->images = $images;
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
     * @return ChatGlobalEmotes
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
     * @return ChatGlobalEmotes
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
     * @return ChatGlobalEmotes
     */
    public function setThemeMode(array $theme_mode): self
    {
        $this->theme_mode = $theme_mode;
        return $this;
    }
}