<?php

class Event
{
    public int $id;
    public string $name;
    public string $datetime;
    public string $description;
    public string $address;
    public Organization $organization;
    public ?string $state;

    public function __construct( $id, $name, $datetime, $description, $address, $organization, $state='')
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->datetime = $datetime;
        $this->description = $description;
        $this->organization = $organization;
        $this->state = $state;

    }
}