<?php


namespace App\Tests\TwitchApi;

use App\Services\TwitchApi\Model\ChannelInfoGroup;
use App\Services\TwitchApi\Model\Oauth;
use App\Services\TwitchApi\TwitchApi;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ChannelTest extends KernelTestCase
{
    private ?TwitchApi $twitchApi;
    private ?Oauth $oauth;

    protected function setUp(): void
    {
        $this->twitchApi = static::getContainer()->get(TwitchApi::class);
        $this->oauth = $this->twitchApi->getOauthApi()->getAppAccessToken();
    }

    public function testChannelInfoSuccess()
    {
        $channelInfo = $this->twitchApi->getChannelApi()->getChannelInfo(
            $this->oauth->getAccessToken(),
            "50597026"
        );

        $this->assertInstanceOf(ChannelInfoGroup::class, $channelInfo);
    }

    public function testChannelInfoNull()
    {
        $channelInfo = $this->twitchApi->getChannelApi()->getChannelInfo(
            $this->oauth->getAccessToken(),
            null
        );

        $this->assertNull($channelInfo);
    }
}