<?php

class User
{
    public int $id;
    public string $name;
    public string $last_name;
    public string $email;
    public string $password;
    public string $address;
    public string $birthday;
    public string $sex;
    public string $resume;
    public string $phone;
    public AimVariety $AimVariety;
    public OccupationVariety $OccupationVariety;
    public TimeVariety $TimeVariety;
    public EnglishVariety $EnglishVariety;


    public function __construct($id, $name, $last_name, $email, $password, $address, $birthday, $sex, $resume, $phone, $AimVariety, $OccupationVariety, $TimeVariety, $EnglishVariety)
    {
        $this->id = $id;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
        $this->birthday = $birthday;
        $this->sex = $sex;
        $this->resume = $resume;
        $this->phone = $phone;
        $this->AimVariety = $AimVariety;
        $this->OccupationVariety = $OccupationVariety;
        $this->TimeVariety = $TimeVariety;
        $this->EnglishVariety = $EnglishVariety;
    }
}