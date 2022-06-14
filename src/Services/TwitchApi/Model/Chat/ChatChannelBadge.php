<?php


namespace App\Services\TwitchApi\Model\Chat;


use App\Services\TwitchApi\Model\Chat\ChannelBadges\ChannelBadgeVersion;

class ChatChannelBadge
{
    private string $set_id;
    /**
     * @var ChannelBadgeVersion[]
     */
    private array $versions;

    /**
     * @return string
     */
    public function getSetId(): string
    {
        return $this->set_id;
    }

    /**
     * @param string $set_id
     * @return ChatChannelBadge
     */
    public function setSetId(string $set_id): ChatChannelBadge
    {
        $this->set_id = $set_id;
        return $this;
    }

    /**
     * @return ChannelBadgeVersion[]
     */
    public function getVersions(): array
    {
        return $this->versions;
    }

    /**
     * @param ChannelBadgeVersion[] $versions
     * @return ChatChannelBadge
     */
    public function setVersions(array $versions): ChatChannelBadge
    {
        $this->versions = $versions;
        return $this;
    }
}