<?php

class EventToUser
{
    public User $user;
    public Event $event;

    public function __construct($user, $event)
    {
        $this->event = $event;
        $this->user = $user;
    }
}