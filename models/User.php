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
    public ?AimVariety $aimVariety;
    public ?OccupationVariety $occupationVariety;
    public ?TimeVariety $timeVariety;
    public ?EnglishVariety $englishVariety;


    public function __construct($id, $name, $lastName, $email, $address, $birthday, $sex, $resume, $phone, $aimVariety, $occupationVariety, $timeVariety, $englishVariety)
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
    }
}