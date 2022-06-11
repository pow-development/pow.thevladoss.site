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

    
}