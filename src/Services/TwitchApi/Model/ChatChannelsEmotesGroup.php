<?php


namespace App\Services\TwitchApi\Model;


use App\Services\TwitchApi\Model\Chat\ChatChannelsEmotes;

class ChatChannelsEmotesGroup
{
    /**
     * @var ChatChannelsEmotes[]
     */
    private array $data;
    private string $template;

    /**
     * @return ChatChannelsEmotes[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ChatChannelsEmotes[] $data
     * @return ChatChannelsEmotesGroup
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
     * @return ChatChannelsEmotesGroup
     */
    public function setTemplate(string $template): self
    {
        $this->template = $template;
        return $this;
    }
}