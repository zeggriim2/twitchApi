<?php


namespace App\Services\TwitchApi\Model;


use App\Services\TwitchApi\Model\Chat\ChatEmotes;

class ChatEmotesGroup
{
    /**
     * @var ChatEmotes[]
     */
    private array $data;
    private string $template;

    /**
     * @return ChatEmotes[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ChatEmotes[] $data
     * @return ChatEmotesGroup
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
     * @return ChatEmotesGroup
     */
    public function setTemplate(string $template): self
    {
        $this->template = $template;
        return $this;
    }
}