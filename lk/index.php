<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="styles/custom/nav.css">
    <link rel="stylesheet" href="../styles/custom/lk.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;1,900&display=swap" rel="stylesheet">

</head>

<body>
<?php
require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/navbar/navbar.php';
require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/services/const.php';
require_once serverPath . '/services/ScoreService.php';
$level = (new ScoreService)->getLevelByScore($_COOKIE['level']);
$nextScore = (new ScoreService)->getNextScoreByLevel($level);

?>
    <div class="container">
        <h1 class="mb-5 mt-5">Личный кабинет волонтёра <img src="../img/settings.png" alt=""></h1>
        <div class="row">
            <div class="col row">
                <div class="col-3">
                    <img src="../img/Rectangle 337.png" class="img-fluid" height="250px" width="250px" alt="">
                </div>
                <div class="col-7 align-self-center">
                    <p class="name mb-0"><?=$_COOKIE['name']?> <?=$_COOKIE['lastName']?><a href="?logout=yes"  style="text-decoration: none;margin-left: 10px; "> <img src="../img/log-out.png" alt=""></a></p>
                    <p class="age mb-0"><?=$_COOKIE['birthday']?></p>
                    <p class="address mb-0">р-н Ховрино</p>
                    <p class="info mb-0"><b>Состоит в команде: </b><a href="/" class="team">pow()</a></p>
                    <p class="info mb-0"><b>Тип волонтерской деятельности: </b>социальная, спортивная</p>
                    <p class="info mb-0"><b>Род деятельности: </b>ученик школы </p>
                    <p class="info mb-0"><b>Уровень английского языка: </b>B2 </p>
                    <p class="info mb-0"><b>Готов заниматься волонтерством: </b>5-6 часов в неделю</p>
                </div>
            </div>
            <div class="col-3">
                <p class="mb-0"><b>Опыт:</b></p>
                <div class="progress">
                    <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="background-color:#00DBC2 "></div>
                </div>

                <div class="row">
                    <div class="col" style="color: #1C1B1D; font-size:14px"><?=$_COOKIE['level']?>/<?=$nextScore?></div>
                    <div class="col text-end" style="color: #1C1B1D; font-size:14px">Уровень <?=$level?></div>
                </div>
            </div>
        </div>

        <h1 class=" mt-5">Предстоящие мероприятия</h1>
        <div class="row  cardcontainer  justify-content-between gy-3">
    <?php
    $events = (new UserService())->getEventsByUser(id: $_COOKIE['id']);
    if ($events) {
        foreach($events as $event){
            ?>
            <div class="col-6 p-3">

                <div class="card p-3">
                    <div class="row justify-content-between">
                        <p style="color: #908D95;"><?=$event->datetime?></p>
                        <h3 class="card-title"><a href="#" class="title"><?=$event->name?></a></h3>
                        <div class="col-5 align-self-center" style="padding-left: 0px;">
                            <img src="https://pow.thevladoss.site/img/Rectangle 337(1).png" class="img-fluid cardimg" alt="...">
                        </div>
                        <div class="col align-self-start data " style="margin-right:5px ;">
                            <div class="row justify-content-start  mt-2"><a href="" class="col-5 text-center tag ">#спорт</a></div>
                            <div class="card-body">
                                <p class="mb-0"><b>Компания: </b><?=$event->organization->name?></p>
                                <p class="mb-0"><b>Время: </b><?=$event->datetime?></p>
                                <p class="mb-0"><b>Место: </b><?=$event->address?></p>
                                <p class="mb-0"><b>Обязанности: </b><?=$event->description?></p>
                                <?php
                                if ($event->state == 'pending') {
                                ?>
                                    <p class="mt-2 text-center mx-auto err w-75 pt-1 pb-1" style="background-color: #908D95"><img src="../img/loader.png" height="16px" width="16px" alt="" style="margin-right:5px">проходит проверку</p>
                                <?php } elseif ($event->state == 'denied') {?>
                                    <p class="mt-2 text-center mx-auto err w-75 pt-1 pb-1" style="background-color:#D43B3B "><img src="../img/x-circle.png" height="16px" width="16px" alt="" style="margin-right:5px">в участии отказано</p>
                                <?php } else {?>
                                    <p class="mt-2 text-center mx-auto err w-75 pt-1 pb-1" style="background-color:#00dbc2 "><img src="../img/check-square.png" height="16px" width="16px" alt="" style="margin-right:5px">вы участвуете</p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } }?>
        </div>
    </div>
        <footer style="margin-top: 150px" >
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