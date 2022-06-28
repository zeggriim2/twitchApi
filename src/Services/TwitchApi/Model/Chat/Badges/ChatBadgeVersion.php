<?php


namespace App\Services\TwitchApi\Model\Chat\Badges;


class ChatBadgeVersion
{
    private string $id;
    private string $image_url_1x;
    private string $image_url_2x;
    private string $image_url_4x;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return ChatBadgeVersion
     */
    public function setId(string $id): ChatBadgeVersion
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl1x(): string
    {
        return $this->image_url_1x;
    }

    /**
     * @param string $image_url_1x
     * @return ChatBadgeVersion
     */
    public function setImageUrl1x(string $image_url_1x): ChatBadgeVersion
    {
        $this->image_url_1x = $image_url_1x;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl2x(): string
    {
        return $this->image_url_2x;
    }

    /**
     * @param string $image_url_2x
     * @return ChatBadgeVersion
     */
    public function setImageUrl2x(string $image_url_2x): ChatBadgeVersion
    {
        $this->image_url_2x = $image_url_2x;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl4x(): string
    {
        return $this->image_url_4x;
    }

    /**
     * @param string $image_url_4x
     * @return ChatBadgeVersion
     */
    public function setImageUrl4x(string $image_url_4x): ChatBadgeVersion
    {
        $this->image_url_4x = $image_url_4x;
        return $this;
    }
}