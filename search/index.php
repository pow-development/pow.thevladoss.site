<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../styles/custom/search.css">
    <link rel="stylesheet" href="../styles/custom/lk.css">
    <link rel="stylesheet" href="../styles/custom/nav.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

</head>

<body>

<?php
require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/navbar/navbar.php';

if (isset($_GET['event'])) {
    $answer = (new UserService)->addEventToUser(user_id: $_COOKIE['id'], event_id: $_GET['event']);
}
?>
<div class="container">
    <h1 class="mt-5">Поиск</h1>
    <form class="search p-3 mt-3">
        <input type="text" class="w-100  searchinput" placeholder="Введите ваш поисковый запрос">
    </form>
    <div class="dropdown m-2">
        <button class="filterbtn p-2 ml-3 mr-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
            фильтры
            <img src="../img/Vector.png" alt="">
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Новое</a></li>
            <li><a class="dropdown-item" href="#">Популярное</a></li>
        </ul>
    </div>
    <p class="text m-3 mt-5">Что ищут другие?</p>
    <div class="row gy-4">
        <?php
        $events = (new UserService())->getEvents();
        if ($events) {
            foreach ($events as $event) {
                ?>
                <div class="col-6">
                    <div class="card p-3">
                        <div class="row justify-content-between">
                            <p style="color: #908D95;"><?= $event->datetime ?></p>
                            <h3 class="card-title"><a href="#" class="title"><?= $event->name ?></a></h3>
                            <div class="col-5 align-self-center" style="padding-left: 0px;">

                                <img src="../img/Rectangle%20339.png" class="img-fluid cardimg" alt="...">
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
                                    <a href="?event=<?= $event->id ?>" style="text-decoration: none;"><p
                                                class="mt-2 text-center mx-auto state w-75 pt-1 pb-1  ">Принять
                                            участие</p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        }
        //            (new UserService())->updateEventToUser(user_id: 11, event_id: 1, status: 'denied')

        ?>
        <!--            <div class="col">-->
        <!--                <div class="card p-3">-->
        <!--                    <div class="row justify-content-between">-->
        <!--                        <p style="color: #908D95;">понедельник, 13 июня 2022</p>-->
        <!--                        <h3 class="card-title"><a href="#" class="title">Помощь в библиотеке</a></h3>-->
        <!--                        <div class="col-5 align-self-center" style="padding-left: 0px;">-->
        <!---->
        <!--                            <img src="../img/Rectangle 337(1).png" class="img-fluid cardimg" alt="...">-->
        <!--                        </div>-->
        <!--                        <div class="col align-self-center data " style="margin-right:5px ;">-->
        <!--                            <div class="row justify-content-around mt-2"><a href="" class="col-5 text-center tag">#социальная</a><a href="" class="col-5 text-center tag">#культурная</a></div>-->
        <!--                            <div class="card-body">-->
        <!--                                <p class="mb-0"><b>Компания: </b>Библиотека имени Ярослава Мудрого</p>-->
        <!--                                <p class="mb-0"><b>Время: </b>12:00</p>-->
        <!--                                <p class="mb-0"><b>Место: </b>ул. Ломоносова 41</p>-->
        <!--                                <p class="mb-0"><b>Обязаности: </b>реставрация книг; инвентаризация библиотечного фонда; расстановка книг в библиотечном фонде; работа в архиве. </p>-->
        <!--                                <p class="w-100 "> <a href="#" class="w-100 text-a mr-0">подробнее...</a>-->
        <!--                                </p>-->
        <!--                                <p class="mt-2 text-center mx-auto state w-75 pt-1 pb-1  ">Принять участие</p>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
    </div>
</div>
<footer>
    <?php
    //    (new UserService())->addEvent(name)
    ?>

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