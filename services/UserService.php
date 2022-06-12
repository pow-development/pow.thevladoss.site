<?php

require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/services/const.php';
require_once serverPath.'/models/User.php';
require_once serverPath.'/models/AimVariety.php';
require_once serverPath.'/models/CategoryVariety.php';
require_once serverPath.'/models/EnglishVariety.php';
require_once serverPath.'/models/OccupationVariety.php';
require_once serverPath.'/models/TimeVariety.php';
require_once serverPath.'/models/UserToCategory.php';

class UserService
{
    private function _queryToDB(string $sql): bool|mysqli_result
    {

        $link = mysqli_connect(servername, username, password, database);

        return mysqli_query($link, $sql);
    }

    public function signIn(string $email, string $password): bool|User|Organization
    {
        $res = $this->_queryToDB("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
        $res2 = $this->_queryToDB("SELECT * FROM `organizations` WHERE `email` = '$email' AND `password` = '$password'");

        if ($res) {
            $user = [];
            while ($user_ = mysqli_fetch_array($res)) {
                var_dump($user_);
                $user = $user_;
            }

            if ($user != []) {
                setcookie('id', $user['id'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('name', $user['name'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('lastName', $user['lastName'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('email', $user['email'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('birthday', $user['birthday'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('phone', $user['phone'], time() + 60 * 60 * 24 * 30, '/');
                return new User(id: $user['id'], name: $user['name'], lastName: $user['last_name'], email: $user['email'], birthday: $user['birthday'], sex: $user['sex'], phone: $user['phone']);
            } else {
                return false;
            }
        } elseif ($res2) {
            $user = [];
            while ($user_ = mysqli_fetch_array($res)) {
                $user = $user_;
            }

            if ($user != []) {
                setcookie('id', $user['id'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('name', $user['name'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('email', $user['email'], time() + 60 * 60 * 24 * 30, '/');
                return new Organization(id: $user['id'], name: $user['name'], email: $user['email']);
            } else {
                return false;
            }
        }
        return false;
    }

    public function signUp(string $name, string $last_name, string $email, string $password, string $birthday, string $sex, string $phone): bool|User
    {
        $res = $this->_queryToDB("INSERT INTO `users` (`name`, `last_name`, `email`, `password`, `birthday`, `sex`, `phone`) VALUES ('$name', '$last_name', '$email', '$password', '$birthday', '$sex', '$phone')");

        if ($res) {
            return $this->signIn(email: $email, password: $password);
        } else {
            return false;
        }
    }

    public function signOut(): bool
    {
        setcookie('id', '', -1, '/');
        setcookie('name', '', -1, '/');
        setcookie('lastName', '', -1, '/');
        setcookie('email', '', -1, '/');
        setcookie('birthday', '', -1, '/');
        setcookie('sex', '', -1, '/');
        setcookie('phone', '', -1, '/');
        return true;
    }


    public function getTimeVariety(): bool|array
    {
        $res = $this->_queryToDB("SELECT * FROM `time_varieties`");
        if (!$res) {
            return false;
        } else {
            $timeVarieties = [];
            while ($time_variety = mysqli_fetch_array($res)) {
                $timeVarieties[] = new TimeVariety(id: $time_variety['id'], name: $time_variety['name']);
            }
            if ($timeVarieties != []) {
                return $timeVarieties;
            } else {
                return false;
            }
        }
    }

    public function getOccupationVariety(): bool|array
    {
        $res = $this->_queryToDB("SELECT * FROM `occupations_varieties`");
        if (!$res) {
            return false;
        } else {
            $occupationVarieties = [];
            while ($occupation_variety = mysqli_fetch_array($res)) {
                $occupationVarieties[] = new OccupationVariety(id: $occupation_variety['id'], name: $occupation_variety['name']);
            }
            if ($occupationVarieties != []) {
                return $occupationVarieties;
            } else {
                return false;
            }
        }
    }

    public function getCategoryVariety(): bool|array
    {
        $res = $this->_queryToDB("SELECT * FROM `categories_varieties`");
        if (!$res) {
            return false;
        } else {
            $categoryVarieties = [];
            while ($category_variety = mysqli_fetch_array($res)) {
                $categoryVarieties[] = new CategoryVariety(id: $category_variety['id'], name: $category_variety['name']);
            }
            if ($categoryVarieties != []) {
                return $categoryVarieties;
            } else {
                return false;
            }
        }
    }

    public function getEnglishVariety(): bool|array
    {
        $res = $this->_queryToDB("SELECT * FROM `english_levels_varieties`");
        if (!$res) {
            return false;
        } else {
            $englishVarieties = [];
            while ($english_variety = mysqli_fetch_array($res)) {
                $englishVarieties[] = new EnglishVariety(id: $english_variety['id'], name: $english_variety['name']);
            }
            if ($englishVarieties != []) {
                return $englishVarieties;
            } else {
                return false;
            }
        }
    }

    public function getAimVariety(): bool|array
    {
        $res = $this->_queryToDB("SELECT * FROM `aims_varieties`");
        if (!$res) {
            return false;
        } else {
            $aimVarieties = [];
            while ($aim_variety = mysqli_fetch_array($res)) {
                $aimVarieties[] = new AimVariety(id: $aim_variety['id'], name: $aim_variety['name']);
            }
            if ($aimVarieties != []) {
                return $aimVarieties;
            } else {
                return false;
            }
        }
    }

    public function fillForm(int $id, string $address, string $resume, string $time_id, string $english_id, string $occupation_id): bool
    {
        $res = $this->_queryToDB("UPDATE `users` SET `address`='$address',`resume`='$resume',`time_id`='$time_id',`english_id` = '$english_id', `occupation_id` = '$occupation_id' WHERE `id` = '$id'");
        if (!$res) {
            return false;
        } else {
            return true;
        }
    }

    public function fillCategory(int $id, array $categories_id): bool|UserToCategory
    {
        foreach($categories_id as $category_id) {
            $res = $this->_queryToDB("INSERT INTO `aims_to_categories`(`user_id`, `aim_id`) VALUES ('$id','$category_id')");
        }
        if (!$res) {
            return false;
        } else {
            return true;
        }
    }
    public function fillAim(int $id, array $aims_id): bool|UserToAims
    {
        foreach($aims_id as $aim_id) {
            $res = $this->_queryToDB("INSERT INTO `aims_to_users`(`user_id`, `aim_id`) VALUES ('$id','$aim_id')");
        }
        if (!$res) {
            return false;
        } else {
            return true;
        }
    }

}