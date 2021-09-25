<?php

namespace App\Adapter\Guru;

class SlackNotification implements Notification
{


    private SlackApi $slack;
    private string $chatId;

    public function __construct(SlackApi $slack, string $chatId)
    {
        $this->slack = $slack;
        $this->chatId = $chatId;
    }

    public function send(string $title, string $message)
    {
        $slackMessage = '#' . $title . '# ' . strip_tags($message);
        $this->slack->login();
        $this->slack->sendMessage($this->chatId, $slackMessage);
    }
}