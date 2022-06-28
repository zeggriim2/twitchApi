<?php


namespace App\Services\TwitchApi\Model;


use App\Services\TwitchApi\Model\Chat\ChatBadge;

class ChatBadgesGroup
{
    /**
     * @var ChatBadge[]
     */
    private array $data;

    /**
     * @return ChatBadge[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ChatBadge[] $data
     * @return ChatBadgesGroup
     */
    public function setData(array $data): ChatBadgesGroup
    {
        $this->data = $data;
        return $this;
    }
}