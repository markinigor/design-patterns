<?php

namespace App\Mediator\DP;

class Ui extends Colleague
{
    public function outputUserInfo(string $username)
    {
        echo  $this->mediator->getUser($username);
    }
}