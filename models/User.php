<?php

class User
{
    public int $id;
    public string $name;
    public string $lastName;
    public string $email;
    public ?string $address;
    public string $birthday;
    public string $sex;
    public ?string $resume;
    public string $phone;
    public ?OccupationVariety $occupationVariety;
    public ?TimeVariety $timeVariety;
    public ?EnglishVariety $englishVariety;
    public int $points;
    public int $level;
    public ?string $state;


    public function __construct($id, $name, $lastName, $email, $address = null, $birthday, $sex, $resume = null, $phone, $aimVariety = null, $occupationVariety = null, $timeVariety = null, $englishVariety = null, $points, $level, $state='')
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->address = $address;
        $this->birthday = $birthday;
        $this->sex = $sex;
        $this->resume = $resume;
        $this->phone = $phone;
        $this->aimVariety = $aimVariety;
        $this->occupationVariety = $occupationVariety;
        $this->timeVariety = $timeVariety;
        $this->englishVariety = $englishVariety;
        $this->points = $points;
        $this->level = $level;
        $this->state = $state;
    }
}