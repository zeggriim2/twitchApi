<?php


namespace App\Services\TwitchApi;


class RequestGenerator
{

    public function generate(
        string $method,
        string $uriEndPoint,
        string $bearer,
        array $queryParams = [],
        array $bodyParams = []
    )
    {
        $headers = [
            'Accept' => '*/*',
            'Authorization' => sprintf('Bearer %s', $bearer)
        ];

        if(count($queryParams) > 0) {
            $this->generateQueryParams($queryParams);
        }
    }

    protected function generateQueryParams(array $queryParams): string
    {
        $queryStringParams = '';
        foreach ($queryParams as $paramMap) {
            if ($paramMap['value'] !== null) {
                if (is_bool($paramMap['value'])) {
                    $paramMap['value'] = (int) $paramMap['value'];
                }
                $format = is_int($paramMap['value']) ? '%d' : '%s';
                $queryStringParams .= sprintf('&%s='.$format, $paramMap['key'], $paramMap['value']);
            }
        }

        dd($queryStringParams);
        return $queryStringParams ? '?'.substr($queryStringParams, 1) : '';
    }
}