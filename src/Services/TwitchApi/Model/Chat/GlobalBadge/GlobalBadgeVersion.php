<?php


namespace App\Services\TwitchApi\Model\Chat\GlobalBadge;


class GlobalBadgeVersion

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
     * @return ChannelBadgeVersion
     */
    public function setId(string $id): ChannelBadgeVersion
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
     * @return ChannelBadgeVersion
     */
    public function setImageUrl1x(string $image_url_1x): ChannelBadgeVersion
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
     * @return ChannelBadgeVersion
     */
    public function setImageUrl2x(string $image_url_2x): ChannelBadgeVersion
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
     * @return ChannelBadgeVersion
     */
    public function setImageUrl4x(string $image_url_4x): ChannelBadgeVersion
    {
        $this->image_url_4x = $image_url_4x;
        return $this;
    }
}