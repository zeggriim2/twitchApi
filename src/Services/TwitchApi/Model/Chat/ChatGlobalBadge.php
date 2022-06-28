<?php


namespace App\Services\TwitchApi\Model\Chat;


use App\Services\TwitchApi\Model\Chat\GlobalBadge\GlobalBadgeVersion;

class ChatGlobalBadge
{
    private string $set_id;
    /**
     * @var GlobalBadgeVersion[]
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
     * @return ChatGlobalBadge
     */
    public function setSetId(string $set_id): ChatGlobalBadge
    {
        $this->set_id = $set_id;
        return $this;
    }

    /**
     * @return GlobalBadgeVersion[]
     */
    public function getVersions(): array
    {
        return $this->versions;
    }

    /**
     * @param GlobalBadgeVersion[] $versions
     * @return ChatGlobalBadge
     */
    public function setVersions(array $versions): ChatGlobalBadge
    {
        $this->versions = $versions;
        return $this;
    }
}