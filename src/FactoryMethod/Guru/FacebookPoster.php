<?php

namespace App\FactoryMethod\Guru;

class FacebookPoster extends SocialNetworkPoster
{


    public function __construct(private string $login, private string $password)
    {
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}