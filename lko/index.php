<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет организатора</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../styles/custom/lko.css">
    <link rel="stylesheet" href="../styles/custom/lk.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;1,900&display=swap" rel="stylesheet">

</head>

<body>
<?php
require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/navbar/navbar.php';

if (isset($_GET['add'])) {
    if ((new UserService())->addEvent(name: 'Открытие новой вейк-площадки SPORTSTATION Sokolniki', datetime: '2022-07-15 12:00:00', description: 'Открытие новой вейк-площадки SPORTSTATION Sokolniki', address: '4-й Лучевой просек, 1-й Путяевский пруд', organization_id: $_COOKIE['id'])) {
        header('Location: https://pow.thevladoss.site/lko/');
    }
}
?>


<div class="container">
    <h1 class="mt-5 mb-5">Личный кабинет организатора <img src="../img/settings.png" alt=""></h1>
    <div class="row">
        <div class="col-6 row  mt-5">
            <div class="col-4 ">
                <img class="img-fluid" src="../img/sokolniki.png" alt="">
            </div>
            <div class="col align-self-end">
                <h2 class=""><?= $_COOKIE['name'] ?><a href="?logout=yes"
                                                       style="text-decoration: none;margin-left: 10px; "> <img
                                src="../img/log-out.png" alt=""></a></h2>
                <div class="orginfo p-4">
                    <p>/Описание организации/
                        Тип волонтерской деятельности организации: спортивная, социальная
                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col align-self-center">
            <h1 class="mt-5 mb-2">Запланированные мероприятия</h1>
        </div>
        <div class="col align-self-center text-end">
            <a href="?add=true" class="addbtn p-3">Добавить новое мероприятие<img class="plusimg"
                                                                                  src="../img/plus-square.png"
                                                                                  alt=""></a>
        </div>
    </div>
    <div class="row">
        <?php
        $events = (new UserService())->getEventsByOrg(id: $_COOKIE['id']);
        if ($events) {
            foreach ($events as $event) {
                $ans = (new UserService())->getUsersByEvent(id: $event->id);
                $count = 0;
                if ($ans) {
                    $count = count($ans);
                }
                ?>
                <div class="col-6">
                    <div class="card p-3 mt-3">
                        <div class="row justify-content-between">
                            <div class="row">
                                <div class="col">
                                    <p style="color: #908D95;" class="w-100"><?= $event->datetime ?></p>
                                </div>
                                <div class="col text-end">
                                    <a href="#"><img src="../img/settings.png" class="" alt=""></a>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="../event/index.php?event_id=<?= $event->id ?>"
                                                      class="title"><?= $event->name ?></a></h3>
                            <div class="col-5 align-self-center" style="padding-left: 0px;">

                                <img src="../img/Rectangle 337(1).png" class="img-fluid cardimg" alt="...">
                            </div>
                            <div class="col align-self-center data " style="margin-right:5px ;">
                                <div class="row justify-content-around mt-2"><a href="" class="col-5 text-center tag">#социальная</a><a
                                            href="" class="col-5 text-center tag">#культурная</a></div>
                                <div class="card-body">
                                    <p class="mb-0"><b>Компания: </b><?= $event->organization->name ?></p>
                                    <p class="mb-0"><b>Время: </b><?= $event->datetime ?></p>
                                    <p class="mb-0"><b>Место: </b><?= $event->address ?></p>
                                    <p class="mb-0 points"><b>Обязаности: </b><?= $event->description ?></p>
                                    <p class="w-100 "><a href="#" class="w-100 text-a mr-0">подробнее...</a>
                                    </p>
                                    <a href="../event/index.php?event_id=<?= $event->id ?>">
                                        <p class="mt-2 text-center mx-auto state w-75 pt-1 pb-1  ">Заявок
                                            подано: <?= $count ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        } ?>
    </div>
</div>
<footer>
    <div class="container-fluid text-center p-5 mt-5" style="background-color: rgba(0, 219, 194, 0.15); ">
        <p>
            Разработано в рамках хакатона Moscow City Hack 2022
        </p>
        <p>
            © pow(), 2022
        </p>
    </div>
</footer>
</body>

</html>