<?php

class TimeVariety
{
    public string $name;
    public string $id;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}
