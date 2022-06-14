<?php


namespace App\Services\TwitchApi\Model;


use App\Services\TwitchApi\Model\Chat\ChatEmoteSet;

class ChatEmotesSetGroup
{
    /**
     * @var ChatEmoteSet[]
     */
    private array $data;
    private string $template;

    /**
     * @return ChatEmoteSet[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ChatEmoteSet[] $data
     * @return ChatEmotesSetGroup
     */
    public function setData(array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @param string $template
     * @return ChatEmotesSetGroup
     */
    public function setTemplate(string $template): self
    {
        $this->template = $template;
        return $this;
    }
}