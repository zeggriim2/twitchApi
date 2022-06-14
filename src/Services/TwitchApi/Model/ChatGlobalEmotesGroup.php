<?php


namespace App\Services\TwitchApi\Model;


use App\Services\TwitchApi\Model\Chat\ChatGlobalEmotes;

class ChatGlobalEmotesGroup
{
    /**
     * @var ChatGlobalEmotes[]
     */
    private array $data;
    private string $template;

    /**
     * @return ChatGlobalEmotes[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ChatGlobalEmotes[] $data
     * @return ChatGlobalEmotesGroup
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
     * @return ChatGlobalEmotesGroup
     */
    public function setTemplate(string $template): self
    {
        $this->template = $template;
        return $this;
    }
}