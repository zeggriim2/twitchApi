<?php


namespace App\Services\TwitchApi\Resources;


use App\Services\TwitchApi\Model\ChannelInfoGroup;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ChannelApi extends AbstractResource
{

    private const URI_CHANNEL_INFO = '/channels';

    public function getChannelInfo(
        string $bearer,
        ?string $broadcasterId
    )
    {
        $queryParams = [];

        $queryParams[] = ['key' => 'broadcaster_id', 'value' => $broadcasterId];

        $queryArrayParams = $this->constructQueryParamArray($queryParams);

        $url = $this->constructUrl(self::URI_CHANNEL_INFO);

        $options = $this->constructHeaders($bearer);
        $options['query'] = $queryArrayParams;

        $response = $this->client->request(
            Request::METHOD_GET,
            $url,
            $options
        );

        if ($response->getStatusCode() === Response::HTTP_OK) {
            return $this->denormalizer->denormalize($response->toArray(), ChannelInfoGroup::class);
        }

        return null;
    }
}