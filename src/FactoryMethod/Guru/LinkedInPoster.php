<?php

namespace App\FactoryMethod\Guru;

class LinkedInPoster extends SocialNetworkPoster
{

    public function __construct(private string $email, private string $password)
    {
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->email, $this->password);
    }


}