<?php

namespace App\Services\TwitchApi\Model;

class Oauth
{
    private string $access_token;
    private int  $expires_in;
    private string  $token_type;

    public function getAccessToken(): string
    {
        return $this->access_token;
    }

    public function setAccessToken(string $access_token): self
    {
        $this->access_token = $access_token;

        return $this;
    }

    public function getExpiresIn(): int
    {
        return $this->expires_in;
    }

    public function setExpiresIn(int $expires_in): self
    {
        $this->expires_in = $expires_in;

        return $this;
    }

    public function getTokenType(): string
    {
        return $this->token_type;
    }

    public function setTokenType(string $token_type): self
    {
        $this->token_type = $token_type;

        return $this;
    }
}
