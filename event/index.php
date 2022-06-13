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
    <!--<link rel="stylesheet" href="../styles/custom/lko.css">-->
    <link rel="stylesheet" href="../styles/custom/lk.css">
    <link rel="stylesheet" href="../styles/custom/event.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;1,900&display=swap" rel="stylesheet">

</head>

<body>
<?php
require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/navbar/navbar.php';
?>
<div class="container">
    <a href="../lko/" style="margin-left: 10px"><img src="../img/arrow-left.png"></a>
    <?php
    if (isset($_GET['event_id'])) {
        $event = (new UserService())->getEventByID(id: $_GET['event_id']);

        $ans = (new UserService())->getUsersByEvent(id: $event->id);
        $count = 0;
        if ($ans) {
            $count = count($ans);
        }

        if (isset($_GET['accept'])) {
            if ((new UserService())->updateEventToUser(event_id: $_GET['event_id'], user_id: $_GET['accept'], status: 'accepted')) {
                header('Location: https://pow.thevladoss.site/event/index.php?event_id=' . $_GET['event_id']);
            }
        }

        if (isset($_GET['deny'])) {
            if ((new UserService())->updateEventToUser(event_id: $_GET['event_id'], user_id: $_GET['deny'], status: 'denied')) {
                header('Location: https://pow.thevladoss.site/event/index.php?event_id=' . $_GET['event_id']);
            }
        }

        ?>
        <div class="row">
            <div class="col">
                <div class="card p-3 mt-3">
                    <div class="row justify-content-between">
                        <div class="row">
                            <div class="col">
                                <p style="color: #908D95;" class="w-100"><?= $event->datetime ?></p>
                            </div>
                            <div class="col text-end">
                                <a href="#"><img src="../img/edit.png" class="" alt=""></a>
                            </div>
                        </div>
                        <h3 class="card-title"><a href="#" class="title"><?= $event->name ?></a></h3>
                        <div class="col-6 align-self-center" style="padding-left: 0px;">

                            <img src="../img/libr.png" class=" cardimg" height="355px" width="600px" alt="...">
                            <img src="../img/triplet.png" class=" cardimg" height="355px" width="600px" alt="...">
                        </div>
                        <div class="col align-self-center data " style="margin-right:5px ;">
                            <!--                        <div class="row justify-content-between mt-2 pe-2"><a href="" class="col-3 text-center tag">#социальная</a><a href="../top/index.php" class="col-3 text-center tag mr-2" style="background-color:#1C1B1D;color:#F5F5F2  ">Подано 6 заявок</a></div>-->
                            <div class="row justify-content-between mt-2 pe-2"><a href="#"
                                                                                  class="col-3 text-center tag">#социальная</a><a
                                        class="col-3 text-center tag mr-2"
                                        style="background-color:#1C1B1D;color:#F5F5F2  " data-bs-toggle="modal"
                                        href="#exampleModalToggle" role="button">Заявок подано: <?= $count ?></a>
                            </div>
                            <div class="card-body">
                                <p><b>Название компании: </b><?= $event->organization->name ?></p>
                                <p><b>Направление: </b>Культурное волонтерство</p>
                                <p><b>Вакансия: </b>Помощь в библиотеке</p>
                                <p><b>Даты и время помощи: </b><?= $event->datetime ?></p>
                                <p><b>Допустимый возраст волонтеров: </b>14-28</p>
                                <p><b>Описание вакансии:</b>
                                    <?= $event->description ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
             tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel"><b>Откликнувшиеся волонтеры</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php
                        $users = (new UserService())->getUsersByEvent(id: $_GET['event_id']);
                        if ($users) {
                            foreach ($users as $k => $user) {
                                ?>
                                <?php if ($user->state == 'denied') { ?>
                                    <div class="row mb-4"
                                         style="border-radius: 40px; background-color: rgba(0, 219, 194, 0.15)">
                                        <div class="col-1 align-self-center text-center"><b><?= $k + 1 ?></b></div>
                                        <div class="col-1 "><img src="../img/Ellipse%203.png"
                                                                 style="margin-top: -10px; margin-bottom: -10px"></div>
                                        <div class="col-2 align-self-center text-center">
                                            <h5><?= $user->name ?> <?= $user->lastName ?></h5></div>
                                        <div class="col-2 align-self-center"></div>
                                        <div class="col-4">
                                            <p class="mb-0"><b>Опыт:</b></p>
                                            <div class="progress">
                                                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                                     aria-valuemin="0"
                                                     aria-valuemax="100" style="background-color:#00DBC2 "></div>
                                            </div>

                                            <div class="row">
                                                <div class="col" style="color: #1C1B1D; font-size:14px">50/100</div>
                                                <div class="col text-end" style="color: #1C1B1D; font-size:14px">Уровень
                                                    3
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 align-self-center text-center">
                                            <button class="p-2"
                                                    style="background-color:#D43B3B; border-radius:100px;color: #F5F5F2; border:0px   ">
                                                <img
                                                        src="../img/x.png" height="20px" width="20px">Отклонено
                                            </button>
                                        </div>
                                    </div>
                                <?php } elseif ($user->state == 'pending') { ?>
                                    <div class="row mb-4"
                                         style="border-radius: 40px; background-color: rgba(0, 219, 194, 0.15)">
                                        <div class="col-1 align-self-center text-center"><b><?= $k + 1 ?></b></div>
                                        <div class="col-1 "><img src="../img/Ellipse%203.png"
                                                                 style="margin-top: -10px; margin-bottom: -10px"></div>
                                        <div class="col-2 align-self-center text-center">
                                            <h5><?= $user->name ?> <?= $user->lastName ?></h5></div>
                                        <div class="col-2 align-self-center"></div>
                                        <div class="col-4">
                                            <p class="mb-0"><b>Опыт:</b></p>
                                            <div class="progress">
                                                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                                     aria-valuemin="0"
                                                     aria-valuemax="100" style="background-color:#00DBC2 "></div>
                                            </div>

                                            <div class="row">
                                                <div class="col" style="color: #1C1B1D; font-size:14px">50/100</div>
                                                <div class="col text-end" style="color: #1C1B1D; font-size:14px">Уровень
                                                    3
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1 align-self-center text-end">
                                            <button class="p-2"
                                                    style="background-color:#00DBC2; border-radius:100%;color: #F5F5F2; border:0px "
                                                    onclick="accept(<?= $_GET['event_id'] ?>, <?= $user->id ?>)">
                                                <img
                                                        src="../img/check.png" height="20px" width="20px"></button>
                                        </div>
                                        <div class="col-1 align-self-center text-start">
                                            <button class="p-2"
                                                    style="background-color:#D43B3B; border-radius:100%;color: #F5F5F2; border:0px"
                                                    onclick="deny(<?= $_GET['event_id'] ?>, <?= $user->id ?>)">
                                                <img
                                                        src="../img/x.png" height="20px" width="20px"></button>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="row mb-4"
                                         style="border-radius: 40px; background-color: rgba(0, 219, 194, 0.15)">
                                        <div class="col-1 align-self-center text-center"><b><?= $k + 1 ?></b></div>
                                        <div class="col-1 "><img src="../img/Ellipse%203.png"
                                                                 style="margin-top: -10px; margin-bottom: -10px"></div>
                                        <div class="col-2 align-self-center text-center"><h5><?= $user->name ?></h5>
                                        </div>
                                        <div class="col-2 align-self-center"></div>
                                        <div class="col-4">
                                            <p class="mb-0"><b>Опыт:</b></p>
                                            <div class="progress">
                                                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75"
                                                     aria-valuemin="0"
                                                     aria-valuemax="100" style="background-color:#00DBC2 "></div>
                                            </div>

                                            <div class="row">
                                                <div class="col" style="color: #1C1B1D; font-size:14px">50/100</div>
                                                <div class="col text-end" style="color: #1C1B1D; font-size:14px">Уровень
                                                    3
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 align-self-center text-center">
                                            <button class="p-2"
                                                    style="background-color:#00DBC2; border-radius:100px;color: #F5F5F2; border:0px ">
                                                <img
                                                        src="../img/check.png" height="20px" width="20px">Одобрено
                                            </button>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php }
                        } ?>
                    </div>
                    <div class="modal-footer">
                        <button class="p-2"
                                style="background-color:#00DBC2; border-radius:100px;color: #F5F5F2; border:0px "
                                data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">
                            Сохранить
                            изменения
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <br>
        События не существует
    <?php } ?>
</div>
<!---->
<!---->

<div class="container-fluid">
    <footer style="w-100">
        <div class="container-fluid text-center p-5 mt-5" style="background-color: rgba(0, 219, 194, 0.15); ">
            <p>
                Разработано в рамках хакатона Moscow City Hack 2022
            </p>
            <p>
                © pow(), 2022
            </p>
        </div>
    </footer>
</div>
<script>
    function accept(id, id2) {
        window.location.href = "https://pow.thevladoss.site/event/index.php?event_id=" + id + "&accept=" + id2;
    }

    function deny(id, id2) {
        window.location.href = "https://pow.thevladoss.site/event/index.php?event_id=" + id + "&deny=" + id2;
    }
</script>
</body>

</html>