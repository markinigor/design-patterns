<?php

namespace Tests\Adapter\Guru;

use App\Adapter\Guru\SlackApi;
use App\Adapter\Guru\SlackNotification;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    /**
     * @test
     */
    public function can_send_message_via_slack_notification_adapter()
    {
        $slackApi = $this->createMock(SlackApi::class);
        $slackApi->expects($this->once())
            ->method('sendMessage');

        $notification = new SlackNotification($slackApi, 'admin');

        $notification->send('Title', 'message');

    }
}