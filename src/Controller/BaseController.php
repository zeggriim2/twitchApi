<?php


namespace App\Controller;


use App\Services\TwitchApi\TwitchApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\Response\TraceableResponse;
use Symfony\Contracts\HttpClient\ResponseInterface;

class BaseController extends AbstractController
{
//    /**
//     * @var TwitchApi
//     */
//    protected $twitchApi;
//
//    /**
//     * @var ResponseInterface
//     */
//    protected $token;
//
//    public function __construct(
//        TwitchApi $twitchApi
//    ) {
//        $this->twitchApi = $twitchApi;
//        $this->token = $twitchApi->getOauthApi()->getAppAccessToken()->;
//    }
}