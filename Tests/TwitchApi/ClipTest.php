<?php


namespace App\Tests\TwitchApi;


use App\Services\TwitchApi\Model\ClipGroup;
use App\Services\TwitchApi\Model\Oauth;
use App\Services\TwitchApi\TwitchApi;
use DateTime;
use Generator;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ClipTest extends KernelTestCase
{
    private ?TwitchApi $twitchApi;
    private ?Oauth $oauth;

    protected function setUp(): void
    {
        $this->twitchApi = static::getContainer()->get(TwitchApi::class);
        $this->oauth = $this->twitchApi->getOauthApi()->getAppAccessToken();
    }

    /**
     * @dataProvider providerClipBroadcasterId
     * @param ?string $broadcasterId
     * @param ?string $first
     * @param ?string $before
     * @param ?string $after
     * @param ?string $startedAt
     * @param ?string $endAt
     */
    public function testClipByBroadcasterIdSuccess($broadcasterId, $first, $before, $after, $startedAt, $endAt)
    {
        $clip = $this->twitchApi->getClipApi()->getClipByBroadcasterId(
            $this->oauth->getAccessToken(),
            $broadcasterId,
            $first,
            $before,
            $after,
            $startedAt,
            $endAt
        );

        if($first) {
            $this->assertCount($first, $clip->getData());
        }

        $this->assertInstanceOf(ClipGroup::class, $clip);
    }

    public function testClipByBroadcasterIdPaginator()
    {
        $clip = $this->twitchApi->getClipApi()->getClipByBroadcasterId(
            $this->oauth->getAccessToken(),
            "50597026"
        );

        $clip = $this->twitchApi->getClipApi()->getClipByBroadcasterId(
            $this->oauth->getAccessToken(),
            "50597026",
            null,
            null,
            $clip->getPagination()["cursor"]
        );

        $this->assertInstanceOf(ClipGroup::class, $clip);
    }

    public function testClipByBroadcasterIdNull()
    {
        $clip = $this->twitchApi->getClipApi()->getClipByBroadcasterId(
            $this->oauth->getAccessToken()
        );

        $this->assertNull($clip);
    }

    /**
     * @dataProvider providerClipGameId
     * @param ?string $gameId
     * @param ?string $first
     * @param ?string $before
     * @param ?string $after
     * @param ?string $startedAt
     * @param ?string $endAt
     */
    public function testClipByGameIdSuccess($gameId, $first, $before, $after, $startedAt, $endAt)
    {
        $clip = $this->twitchApi->getClipApi()->getClipByGameId(
            $this->oauth->getAccessToken(),
            $gameId,
            $first,
            $before,
            $after,
            $startedAt,
            $endAt
        );

        if($first){
            $this->assertCount($first,$clip->getData());
        }

        $this->assertInstanceOf(ClipGroup::class, $clip);
    }

    public function testClipByGameIdPaginator()
    {
        $clip = $this->twitchApi->getClipApi()->getClipByGameId(
            $this->oauth->getAccessToken(),
            "509663"
        );

        $clip = $this->twitchApi->getClipApi()->getClipByGameId(
            $this->oauth->getAccessToken(),
            "509663",
            null,
            null,
            $clip->getPagination()["cursor"]
        );

        $this->assertInstanceOf(ClipGroup::class, $clip);
    }

    public function testClipByGameIdNull()
    {
        $clip = $this->twitchApi->getClipApi()->getClipByGameId(
            $this->oauth->getAccessToken()
        );

        $this->assertNull($clip);
    }

    /**
     * @dataProvider providerClipId
     * @param $id
     * @param $before
     * @param $after
     */
    public function testClipByIdSuccess($id, $before, $after)
    {
        $clip = $this->twitchApi->getClipApi()->getClipById(
            $this->oauth->getAccessToken(),
            $id,
            $before,
            $after
        );

        $this->assertInstanceOf(ClipGroup::class, $clip);
    }

    public function testClipByIdNull()
    {
        $clip = $this->twitchApi->getClipApi()->getClipById(
            $this->oauth->getAccessToken()
        );

        $this->assertNull($clip);
    }

    /**
     * @return Generator
     */
    public function providerClipBroadcasterId(): Generator
    {
        $startDate = (new DateTime("2020/10/30"))->format(DateTime::RFC3339);
        $endDate = (new DateTime("2020/11/30"))->format(DateTime::RFC3339);

        yield ["50597026", null, null, null, null, null];
        yield ["50597026", null, null, null, $startDate, $endDate];
        yield ["50597026", 10, null, null, null, null];
    }

    /**
     * @return Generator
     */
    public function providerClipGameId(): Generator
    {
        $startDate = (new DateTime("2020/10/30"))->format(DateTime::RFC3339);
        $endDate = (new DateTime("2020/11/30"))->format(DateTime::RFC3339);

        yield ["509663", null, null, null, null, null];
        yield ["509663", null, null, null, $startDate, $endDate];
        yield ["509663", 10, null, null, null, null];
    }

    /**
     * @return Generator
     */
    public function providerClipId(): Generator
    {
        yield ["PuzzledShakingCrabsLeeroyJenkins", null, null];
    }
}