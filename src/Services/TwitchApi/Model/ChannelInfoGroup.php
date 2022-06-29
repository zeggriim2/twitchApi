<?php


namespace App\Services\TwitchApi\Model;


use App\Services\TwitchApi\Model\Channel\ChannelInfo;

class ChannelInfoGroup
{
    /**
     * @var ChannelInfo[]
     */
    private array $data;

    /**
     * @return ChannelInfo[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ChannelInfo[] $data
     * @return ChannelInfoGroup
     */
    public function setData(array $data): self
    {
        $this->data = $data;
        return $this;
    }
}