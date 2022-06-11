<?php

class User
{
    public int $id;
    public string $name;
    public string $last_name;
    public string $email;
    public string $password;
    public string $region;
    public string $birthday;
    public string $sex;

    public function __construct($id, $name, $last_name, $photo, $email, $password, $region, $birthday, $sex)
    {
        $this->id = $id;
        $this->name = $name;
        $this->last_name;
        $this->photo = $photo;
        $this->email = $email;
        $this->password = $password;
        $this->region = $region;
        $this->birthday = $birthday;
        $this->sex = $sex;
    }
}