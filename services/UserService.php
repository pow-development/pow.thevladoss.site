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

    public function signIn(string $email, string $password, string $remember): bool|User
    {
        $res = $this->_queryToDB("SELECT * FROM `users` WHERE (`email` = '$email') AND `password` = '$password'");
        if (!$res) {
            return false;
        } else {
            $user = [];
            while ($user_ = mysqli_fetch_array($res)) {
                $user = $user_;
            }

            if ($user != []) {
                setcookie('id', $user['id'], ($remember == 'on') ? time() + 60 * 60 * 24 * 30 : time() + 60 * 60, '/');
                setcookie('name', $user['name'], ($remember == 'on') ? time() + 60 * 60 * 24 * 30 : time() + 60 * 60, '/');
                setcookie('last_name', $user['last_name'], ($remember == 'on') ? time() + 60 * 60 * 24 * 30 : time() + time() + 60 * 60, '/');
                setcookie('email', $user['email'], ($remember == 'on') ? time() + 60 * 60 * 24 * 30 : time() + 60 * 60, '/');
                setcookie('address', $user['address'], ($remember == 'on') ? time() + 60 * 60 * 24 * 30 : time() + 60 * 60, '/');
                setcookie('birthday', $user['birthday'], ($remember == 'on') ? time() + 60 * 60 * 24 * 30 : time() + 60 * 60, '/');
                setcookie('sex', $user['sex'], ($remember == 'on') ? time() + 60 * 60 * 24 * 30 : time() + 60 * 60, '/');
                setcookie('resume', $user['resume'], ($remember == 'on') ? time() + 60 * 60 * 24 * 30 : time() + 60 * 60, '/');
                setcookie('phone', $user['phone'], ($remember == 'on') ? time() + 60 * 60 * 24 * 30 : time() + 60 * 60, '/');
                setcookie('remember', $remember, ($remember == 'on') ? time() + 60 * 60 * 24 * 30 : time() + 60 * 60, '/');
                setcookie('telegram_id', $user['telegram_id'], ($remember == 'on') ? time() + 60 * 60 * 24 * 30 : time() + 60 * 60, '/');
                return new User(id: $user['id'], name: $user['name'], last_name: $user['last_name'], email: $user['email'], birthday: $user['birthday'], address: $user['address'], sex: $user['sex'], resume: $user['resume'], phone: $user['phone']);
            } else {
                return false;
            }
        }
    }

    public function SignUp(string $name, string $last_name, string $email, string $password, string $birthday, string $sex, string $phone): bool|User
    {
        $res = $this->_queryToDB("INSERT INTO `users` (`name`, `last_name`, `email`, `password`, `birthday`, `sex`, `phone`) VALUES (`$name`, `$last_name`, `$email`, `$password`, `$birthday`, `$sex`, `$phone`)");

        if ($res) {
            return $this->signIn(email: $email, password: $password, remember: 'on');
        } else {
            return false;
        }
    }

    public function signOut(): bool
    {
        setcookie('id', '', -1, '/');
        setcookie('name', '', -1, '/');
        setcookie('last_name', '', -1, '/');
        setcookie('email', '', -1, '/');
        setcookie('address', '', -1, '/');
        setcookie('birthday', '', -1, '/');
        setcookie('sex', '', -1, '/');
        setcookie('resume', '', -1, '/');
        setcookie('phone', '', -1, '/');
        setcookie('remember', '', -1, '/');
        setcookie('telegram_id', '', -1, '/');
        return true;
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

    public function getOccupationVariety(): bool|array
    {
        $res = $this->_queryToDB("SELECT * FROM `occupations_varieties`");
        if (!$res) {
            return false;
        } else {
            $occupationVarieties = [];
            while ($occupation_variety = mysqli_fetch_array($res)) {
                $occupationVarieties[] = new AimVariety(id: $occupation_variety['id'], name: $occupation_variety['name']);
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
                $categoryVarieties[] = new AimVariety(id: $category_variety['id'], name: $category_variety['name']);
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
                $englishVarieties[] = new AimVariety(id: $english_variety['id'], name: $english_variety['name']);
            }
            if ($englishVarieties != []) {
                return $englishVarieties;
            } else {
                return false;
            }
        }
    }
    public function FillForm(int $id, string $address, string $resume, string $aim_id, string $occupation_id, string $time_id, string $english_id): bool|User
    {
        $res = $this->_queryToDB("UPDATE `users` SET `address`= $address,`resume`=$resume,`aim_id`=$aim_id,`occupation_id`=$occupation_id,`time_id`=$time_id,`english_id`=$english_id WHERE `id` = $id");
        return $res;
    }


}