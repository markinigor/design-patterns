<?php

namespace Tests\FactoryMethod\Guru;

use App\FactoryMethod\Guru\FacebookConnector;
use App\FactoryMethod\Guru\FacebookPoster;
use App\FactoryMethod\Guru\LinkedInConnector;
use App\FactoryMethod\Guru\LinkedInPoster;
use PHPUnit\Framework\TestCase;

class SocialNetworkConnectorTest extends TestCase
{
    /**
     * @test
     */
    public function can_create_facebook_poster()
    {
        $poster = new FacebookPoster('login', 'password');

        $socialNetwork = $poster->getSocialNetwork();

        $this->assertInstanceOf(FacebookConnector::class, $socialNetwork);
    }

    /**
     * @test
     */
    public function can_create_linkedin_poster()
    {
        $poster = new LinkedInPoster('email', 'password');

        $socialNetwork = $poster->getSocialNetwork();

        $this->assertInstanceOf(LinkedInConnector::class, $socialNetwork);
    }
}