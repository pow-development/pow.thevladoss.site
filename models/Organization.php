<?php

class Organization
{
    public int $id;
    public string $name;
    public string $email;


    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }
}