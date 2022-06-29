<?php


namespace App\Tests\TwitchApi;


use App\Services\TwitchApi\Model\GameGroup;
use App\Services\TwitchApi\Model\Oauth;
use App\Services\TwitchApi\TwitchApi;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class GameTest extends KernelTestCase
{
    private ?TwitchApi $twitchApi;
    private ?Oauth $oauth;

    protected function setUp(): void
    {
        $this->twitchApi = static::getContainer()->get(TwitchApi::class);
        $this->oauth = $this->twitchApi->getOauthApi()->getAppAccessToken();
    }

    public function testGameByIdSuccess()
    {
        $game = $this->twitchApi->getGameApi()->getGameById(
            $this->oauth->getAccessToken(),
            "493057",
        );

        $this->assertInstanceOf(GameGroup::class, $game);
    }

    public function testGameByIdNull()
    {
        $game = $this->twitchApi->getGameApi()->getGameById(
            $this->oauth->getAccessToken()
        );

        $this->assertNull($game);
    }

    public function testGameByNameSuccess()
    {
        $game = $this->twitchApi->getGameApi()->getGameByName(
            $this->oauth->getAccessToken(),
            "fortnite",
        );

        $this->assertInstanceOf(GameGroup::class, $game);
    }

    public function testGameByNameNull()
    {
        $game = $this->twitchApi->getGameApi()->getGameByName(
            $this->oauth->getAccessToken()
        );

        $this->assertNull($game);
    }

    public function testGameTop()
    {
        $gameTop = $this->twitchApi->getGameApi()->getGameTop(
            $this->oauth->getAccessToken()
        );

        $this->assertInstanceOf(GameGroup::class, $gameTop);
    }
}