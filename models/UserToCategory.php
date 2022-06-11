<?php

class UserToCategory
{
    public User $User;
    public CategoryVariety $CategoryVariety;

    public function __construct($User, $CategoryVariety)
    {
        $this->User = $User;
        $this->CategoryVariety = $CategoryVariety;
    }
}