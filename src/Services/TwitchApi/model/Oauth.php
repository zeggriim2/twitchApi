<?php


namespace App\Services\TwitchApi\model;


class Oauth
{
    private string $access_token;
    private int  $expires_in;
    private string  $token_type;

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->access_token;
    }

    /**
     * @param string $access_token
     * @return Oauth
     */
    public function setAccessToken(string $access_token): Oauth
    {
        $this->access_token = $access_token;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expires_in;
    }

    /**
     * @param int $expires_in
     * @return Oauth
     */
    public function setExpiresIn(int $expires_in): Oauth
    {
        $this->expires_in = $expires_in;
        return $this;
    }

    /**
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->token_type;
    }

    /**
     * @param string $token_type
     * @return Oauth
     */
    public function setTokenType(string $token_type): Oauth
    {
        $this->token_type = $token_type;
        return $this;
    }
}