<?php


namespace App\Services\TwitchApi\Model\Chat;


use App\Services\TwitchApi\Model\Chat\Badges\ChatBadgeVersion;

class ChatBadge
{
    private string $set_id;
    /**
     * @var ChatBadgeVersion[]
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
     * @return ChatBadge
     */
    public function setSetId(string $set_id): ChatBadge
    {
        $this->set_id = $set_id;
        return $this;
    }

    /**
     * @return ChatBadgeVersion[]
     */
    public function getVersions(): array
    {
        return $this->versions;
    }

    /**
     * @param ChatBadgeVersion[] $versions
     * @return ChatBadge
     */
    public function setVersions(array $versions): ChatBadge
    {
        $this->versions = $versions;
        return $this;
    }
}