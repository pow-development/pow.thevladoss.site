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
    <link rel="stylesheet" href="../styles/custom/lk.css">

</head>

<body>
<?php
require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/navbar/navbar.php';
?>
    <div class="container">
        <h1 class="mb-5 mt-5">Личный кабинет волонтёра <img src="../img/settings.png" alt=""></h1>
        <div class="row">
            <div class="col row">
                <div class="col-3">
                    <img src="../img/Rectangle 337.png" class="img-fluid" height="250px" width="250px" alt="">
                </div>
                <div class="col-7 align-self-center">
                    <p class="name mb-0">Ilya Tampio</p>
                    <p class="age mb-0">14 лет</p>
                    <p class="address mb-0">р-н Ховрино</p>
                    <p class="info mb-0"><b>Состоит в команде: </b><a href="/" class="team">pow()</a></p>
                    <p class="info mb-0"><b>Тип волонтерской деятельности: </b>социальная, спортивная</p>
                    <p class="info mb-0"><b>Род деятельности: </b>ученик школы </p>
                    <p class="info mb-0"><b>Уровень английского языка: </b>B2 </p>
                    <p class="info mb-0"><b>Готов заниматься волонтерством: </b>1-2 раза в неделю</p>
                </div>
            </div>
            <div class="col-3">
                <p class="mb-0"><b>Опыт:</b></p>
                <div class="progress">
                    <div class="progress-bar  w-25 pb" role="progressbar" aria-valuenow="291" aria-valuemin="0" aria-valuemax="1000"></div>
                </div>
                <div class="row">
                    <div class="col" style="color: #1C1B1D; font-size:14px">291/1000</div>
                    <div class="col text-end" style="color: #1C1B1D; font-size:14px">Уровень 5</div>
                </div>
            </div>
        </div>

        <h1 class=" mt-5">Предстоящие мероприятия</h1>
        <div class="row  cardcontainer  justify-content-between gy-3">
            <div class="col-6 p-3">

                <div class="card p-3">
                    <div class="row justify-content-between">
                        <p style="color: #908D95;">понедельник, 13 июня 2022</p>
                        <h3 class="card-title"><a href="#" class="title">Помощь в библиотеке</a></h3>
                        <div class="col-5 align-self-center" style="padding-left: 0px;">

                            <img src="https://pow.thevladoss.site/img/Rectangle 337(1).png" class="img-fluid cardimg" alt="...">
                        </div>
                        <div class="col align-self-start data " style="margin-right:5px ;">
                            <div class="row justify-content-start  mt-2"><a href="" class="col-5 text-center tag ">#спорт</a></div>
                            <div class="card-body">
                                <p class="mb-0"><b>Компания: </b>Библиотека имени Ярослава Мудрого</p>
                                <p class="mb-0"><b>Время: </b>12:00</p>
                                <p class="mb-0"><b>Место: </b>ул. Ломоносова 41</p>
                                <p class="mb-0"><b>Обязаности: </b>реставрация книг; инвентаризация библиотечного фонда; расстановка книг в библиотечном фонде; работа в архиве. </p>
                                <p class="mt-2 text-center mx-auto err w-75 pt-1 pb-1"><img src="../img/x-circle.png" height="16px" width="16px" alt="" style="margin-right:5px">в участии отказано</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="card p-3">
                    <div class="row justify-content-between">
                        <p style="color: #908D95;">понедельник, 13 июня 2022</p>
                        <h3 class="card-title"><a href="#" class="title">Помощь в библиотеке</a></h3>
                        <div class="col-5 align-self-center" style="padding-left: 0px;">

                            <img src="../img/Rectangle 337(1).png" class="img-fluid cardimg" alt="...">
                        </div>
                        <div class="col align-self-center data " style="margin-right:5px ;">
                            <div class="row justify-content-around mt-2"><a href="" class="col-5 text-center tag">#социальная</a><a href="" class="col-5 text-center tag">#культурная</a></div>
                            <div class="card-body">
                                <p class="mb-0"><b>Компания: </b>Библиотека имени Ярослава Мудрого</p>
                                <p class="mb-0"><b>Время: </b>12:00</p>
                                <p class="mb-0"><b>Место: </b>ул. Ломоносова 41</p>
                                <p class="mb-0"><b>Обязаности: </b>реставрация книг; инвентаризация библиотечного фонда; расстановка книг в библиотечном фонде; работа в архиве. </p>
                                <p class="mt-2 text-center mx-auto state w-75 pt-1 pb-1"><img src="../img/check-square.png" height="16px" width="16px" alt="" style="margin-right:5px">проходит проверку</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 p-3">
                <div class="card p-3">
                    <div class="row justify-content-between">
                        <p style="color: #908D95;">понедельник, 13 июня 2022</p>
                        <h3 class="card-title"><a href="#" class="title">Помощь в библиотеке</a></h3>
                        <div class="col-5 align-self-center" style="padding-left: 0px;">

                            <img src="../img/Rectangle 337(1).png" class="img-fluid cardimg" alt="...">
                        </div>
                        <div class="col align-self-center data " style="margin-right:5px ;">
                            <div class="row justify-content-around mt-2"><a href="" class="col-5 text-center tag">#социальная</a><a href="" class="col-5 text-center tag">#культурная</a></div>
                            <div class="card-body">
                                <p class="mb-0"><b>Компания: </b>Библиотека имени Ярослава Мудрого</p>
                                <p class="mb-0"><b>Время: </b>12:00</p>
                                <p class="mb-0"><b>Место: </b>ул. Ломоносова 41</p>
                                <p class="mb-0"><b>Обязаности: </b>реставрация книг; инвентаризация библиотечного фонда; расстановка книг в библиотечном фонде; работа в архиве. </p>
                                <p class="mt-2 text-center mx-auto state w-75 pt-1 pb-1  wait"><img src="../img/loader.png" height="16px" width="16px" style="margin-right:5px" alt="">вы участвуете</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>