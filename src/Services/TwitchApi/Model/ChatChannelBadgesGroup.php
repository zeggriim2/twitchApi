<?php


namespace App\Services\TwitchApi\Model;


use App\Services\TwitchApi\Model\Chat\ChatChannelBadge;

class ChatChannelBadgesGroup
{
    /**
     * @var ChatChannelBadge[]
     */
    private array $data;

    /**
     * @return ChatChannelBadge[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ChatChannelBadge[] $data
     * @return ChatChannelBadgesGroup
     */
    public function setData(array $data): ChatChannelBadgesGroup
    {
        $this->data = $data;
        return $this;
    }
}