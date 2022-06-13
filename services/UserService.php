<?php

require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/services/const.php';
require_once serverPath . '/models/User.php';
require_once serverPath . '/models/Organization.php';
require_once serverPath . '/models/AimVariety.php';
require_once serverPath . '/models/CategoryVariety.php';
require_once serverPath . '/models/EnglishVariety.php';
require_once serverPath . '/models/OccupationVariety.php';
require_once serverPath . '/models/TimeVariety.php';
require_once serverPath . '/models/UserToCategory.php';
require_once serverPath . '/models/Event.php';
require_once serverPath . '/models/EventToUser.php';

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
        if ($res->num_rows > 0) {
            $user = [];
            while ($user_ = mysqli_fetch_array($res)) {
                $user = $user_;
            }

            if ($user != []) {
                setcookie('id', $user['id'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('name', $user['name'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('type', 'val', time() + 60 * 60 * 24 * 30, '/');
                setcookie('lastName', $user['last_name'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('email', $user['email'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('birthday', $user['birthday'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('phone', $user['phone'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('points', $user['points'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('level', $user['level'], time() + 60 * 60 * 24 * 30, '/');
                return new User(id: $user['id'], name: $user['name'], lastName: $user['last_name'], email: $user['email'], birthday: $user['birthday'], sex: $user['sex'], phone: $user['phone'], points: $user['points'], level: $user['level']);
            } else {
                return false;
            }
        } elseif ($res2->num_rows > 0) {
            $user = [];
            while ($user_ = mysqli_fetch_array($res2)) {
                $user = $user_;
            }

            if ($user != []) {
                setcookie('id', $user['id'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('type', 'org', time() + 60 * 60 * 24 * 30, '/');
                setcookie('name', $user['name'], time() + 60 * 60 * 24 * 30, '/');
                setcookie('email', $user['email'], time() + 60 * 60 * 24 * 30, '/');
                return new Organization(id: $user['id'], name: $user['name'], email: $user['email']);
            } else {
                return false;
            }
        }
        return false;
    }

    public function signUp(string $name, string $lastName, string $email, string $password, string $birthday, string $sex, string $phone): bool|User
    {
        $res = $this->_queryToDB("INSERT INTO `users` (`name`, `last_name`, `email`, `password`, `birthday`, `sex`, `phone`, `points`, `level`) VALUES ('$name', '$lastName', '$email', '$password', '$birthday', '$sex', '$phone', '100', '500')");
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
        setcookie('type', '', -1, '/');
        setcookie('lastName', '', -1, '/');
        setcookie('email', '', -1, '/');
        setcookie('birthday', '', -1, '/');
        setcookie('sex', '', -1, '/');
        setcookie('phone', '', -1, '/');
        setcookie('points', '', -1, '/');
        setcookie('level', '', -1, '/');
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
        foreach ($categories_id as $category_id) {
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
        foreach ($aims_id as $aim_id) {
            $res = $this->_queryToDB("INSERT INTO `aims_to_users`(`user_id`, `aim_id`) VALUES ('$id','$aim_id')");
        }
        if (!$res) {
            return false;
        } else {
            return true;
        }
    }

    public function getOrganization(int $id): bool|Organization
    {
        $res = $this->_queryToDB("SELECT * FROM `organizations` WHERE `id` = '$id'");
        if (!$res) {
            return false;
        } else {

            $organizations = [];
            while ($organization = mysqli_fetch_array($res)) {
                $organizations = $organization;
            }
            if ($organizations != []) {
                return new Organization(id: $organizations['id'], name: $organizations['name'], email: $organizations['email']);
            } else {
                return false;
            }
        }
    }

    public function getEvents(): bool|array
    {
        $res = $this->_queryToDB("SELECT * FROM `events`");
        if (!$res) {
            return false;
        } else {
            $events = [];
            while ($event_ = mysqli_fetch_array($res)) {
                $events[] = new Event(id: $event_['id'], name: $event_['name'], datetime: $event_['date'], description: $event_['description'], address: $event_['address'], organization: $this->getOrganization($event_['organization_id']));
            }
            if ($events != []) {
                return $events;
            } else {
                return false;
            }
        }
    }

    public function getEventsByOrg(int $id): bool|array
    {
        $res = $this->_queryToDB("SELECT * FROM `events` WHERE `organization_id` = '$id'");
        if (!$res) {
            return false;
        } else {
            $events = [];
            while ($event_ = mysqli_fetch_array($res)) {
                $events[] = new Event(id: $event_['id'], name: $event_['name'], datetime: $event_['date'], description: $event_['description'], address: $event_['address'], organization: $this->getOrganization($event_['organization_id']));
            }
            if ($events != []) {
                return $events;
            } else {
                return false;
            }
        }
    }

    public function getEventsByUser(int $id): bool|array
    {
        $res = $this->_queryToDB("SELECT * FROM `events_to_users` WHERE `user_id` = '$id'");
        if (!$res) {
            return false;
        } else {
            $events = [];
            while ($event__ = mysqli_fetch_array($res)) {
                $res1 = $this->_queryToDB("SELECT * FROM `events` WHERE `id` = '" . $event__['event_id'] . "'");
                if ($res1) {
                    while ($event_ = mysqli_fetch_array($res1)) {
                        $events[] = new Event(id: $event_['id'], name: $event_['name'], datetime: $event_['date'], description: $event_['description'], address: $event_['address'], organization: $this->getOrganization($event_['organization_id']), state: $event__['status']);
                    }
                }
            }
            if ($events != []) {
                return $events;
            } else {
                return false;
            }
        }
    }

    public function getUsersByEvent(int $id): bool|array
    {
        $res = $this->_queryToDB("SELECT * FROM `events_to_users` WHERE `event_id` = '$id'");
        if (!$res) {
            return false;
        } else {
            $users = [];
            while ($user__ = mysqli_fetch_array($res)) {
                $res1 = $this->_queryToDB("SELECT * FROM `users` WHERE `id` = '" . $user__['user_id'] . "'");
                if (!$res1) {
                    return false;
                } else {
                    while ($user_ = mysqli_fetch_array($res1)) {
                        $users[] = new User(id: $user_['id'], name: $user_['name'], lastName: $user_['last_name'], email: $user_['email'], birthday: $user_['birthday'], sex: $user_['sex'], phone: $user_['phone'], points: 0, level: 0, state: $user__['status'],);
                    }
                }
            }
            if ($users != []) {
                return $users;
            } else {
                return false;
            }
        }
    }

    public function addEvent(string $name, string $datetime, string $description, string $address, int $organization_id): bool
    {
        $res = $this->_queryToDB("INSERT INTO `events`( `name`, `date`, `description`, `address`, `organization_id`) VALUES ('$name', '$datetime',  '$description', '$address', '$organization_id')");
        if (!$res) {
            return false;
        } else {
            return true;
        }

    }


    public function addEventToUser(int $user_id, int $event_id): bool
    {
        $res = $this->_queryToDB("INSERT INTO `events_to_users` (`user_id`,`event_id`, `status`) VALUES ('$user_id', '$event_id', 'pending')");
        if (!$res) {
            return false;
        } else {
            return true;
        }
    }

    public function updateEventToUser(int $user_id, int $event_id, string $status): bool
    {
        $res = $this->_queryToDB("UPDATE `events_to_users` SET `status`= '$status' WHERE `user_id` = '$user_id' AND `event_id` = '$event_id'");
        if (!$res) {
            return false;
        } else {
            return true;
        }
    }

    public function getEventByID(int $id): bool|Event
    {
        $res = $this->_queryToDB("SELECT * FROM `events` WHERE `id` = '$id'");
        if (!$res) {
            return false;
        } else {
            $event = [];
            while ($event_ = mysqli_fetch_array($res)) {
                $event = $event_;
            }
            if ($event != []) {
                return new Event(id: $event['id'], name: $event['name'], datetime: $event['date'], description: $event['description'], address: $event['address'], organization: $this->getOrganization($event['organization_id']));
            } else {
                return false;
            }
        }
    }


    public function getUserByID(int $id): bool|User
    {
        $res = $this->_queryToDB("SELECT * FROM `users` WHERE `id` = '$id'");
        if (!$res) {
            return false;
        } else {
            $users = [];
            while ($user = mysqli_fetch_array($res)) {
                $users = $user;
            }
            if ($users != []) {
                return new User(id: $users['id'], name: $users['name'], lastName: $users['last_name'], email: $users['email'], birthday: $users['birthday'], sex: $users['sex'], phone: $users['phone'], occupationVariety: $this->getOccupation($users['occupation_id']), timeVariety: $this->getTime($users['time_id']), englishVariety: $this->getEnglish($users['english_id']), points: $users['points'], level: $users['level']);
            } else {
                return false;
            }
        }
    }


    public function getOccupation(int $id): bool|OccupationVariety
    {
        $res = $this->_queryToDB("SELECT * FROM `occupations_varieties` WHERE `id` = '$id'");
        if (!$res) {
            return false;
        } else {
            $occupationVariety = [];
            while ($occupation = mysqli_fetch_array($res)) {
                $occupationVariety = $occupation;
            }
            if ($occupationVariety != []) {
                return new OccupationVariety(id: $occupationVariety['id'], name: $occupationVariety['name']);
            } else {
                return false;
            }
        }
    }

    public function getEnglish(int $id): bool|OccupationVariety
    {
        $res = $this->_queryToDB("SELECT * FROM `english_levels_varieties` WHERE `id` = '$id'");
        if (!$res) {
            return false;
        } else {
            $englishVariety = [];
            while ($english = mysqli_fetch_array($res)) {
                $englishVariety = $english;
            }
            if ($englishVariety != []) {
                return new OccupationVariety(id: $englishVariety['id'], name: $englishVariety['name']);
            } else {
                return false;
            }
        }
    }

    public function getTime(int $id): bool|OccupationVariety
    {
        $res = $this->_queryToDB("SELECT * FROM `english_levels_varieties` WHERE `id` = '$id'");
        if (!$res) {
            return false;
        } else {
            $timeVariety = [];
            while ($time = mysqli_fetch_array($res)) {
                $timeVariety = $time;
            }
            if ($timeVariety != []) {
                return new OccupationVariety(id: $timeVariety['id'], name: $timeVariety['name']);
            } else {
                return false;
            }
        }
    }


}