<?php

class EventsToCategory
{
    public Event $event;
    public CategoryVariety $categoryVariety;

    public function __construct($event, $categoryVariety)
    {
        $this->event = $event;
        $this->categoryVariety = $categoryVariety;
    }
}