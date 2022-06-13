<?php
require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/services/UserService.php';

if (isset($_GET['logout'])) {
    (new UserService())->signOut();
    header('Location: https://pow.thevladoss.site');
}

if (!isset($_COOKIE['type'])) {
    ?>
    <nav class="navbar navbar-expand-lg nav" id="nav">
        <div class="container">
            <a class="navbar-brand" href="https://pow.thevladoss.site/index.php">
                <img src="../img/logo.png" alt="" style="filter:none " width="160" height="50">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse row justify-content-end" id="navbarSupportedContent">
                <div class="col-4 align-self-end">
                    <ul class="navbar-nav row w-100 justify-content-end">
                        <li class="col nav-item text-end">

                            <a class="row" href="https://pow.thevladoss.site/login/index.php"
                               style="text-decoration: none;color:black">
                                <div class="col text-end p-0"><img src="../img/log-in.png" style=""></div>
                                <div class="col text-start align-self-center">Вход</div>
                            </a>
                        </li>
                        <li class="col nav-item text-end">

                            <a class="row" href="https://pow.thevladoss.site/login/index.php"
                               style="text-decoration: none;color:black">
                                <div class="col text-end p-0"><img src="../img/user-plus.png" style=""></div>
                                <div class="col text-start align-self-center">Регистрация</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </nav>
    <hr style="margin-top: -5px; color: #00dbc2"/>
    <script>
        function regBtn() {
            window.location.href = "https://pow.thevladoss.site/reg/index.php";
        }

        function logBtn() {
            window.location.href = "https://pow.thevladoss.site/login/index.php";
        }
    </script>
    <?php
} elseif ($_COOKIE['type'] == 'org') { ?>
    <nav class="navbar navbar-expand-lg " style="padding-top: 0px">
        <div class="container">
            <a class="navbar-brand" href="https://pow.thevladoss.site/index.php">
                <img src="../img/logo.png" alt="" style="filter:none " width="160" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav row w-100">
                    <li class="nav-item col text-end ">

                        <a class="row" href="https://pow.thevladoss.site/index.php"
                           style="text-decoration: none;color:black; margin-top: 30px">
                            <div class="col text-end p-0 align-self-center"><img src="../img/home.png" style=""></div>
                            <div class="col text-start align-self-center">Главная</div>
                        </a>
                    </li>
                    <li class="nav-item col text-end">
                        <a class="row" href="https://pow.thevladoss.site/search/index.php"
                           style="text-decoration: none;color:black; margin-top: 30px">
                            <div class="col text-end p-0 align-self-center"><img src="../img/search.png" style=""></div>
                            <div class="col text-start align-self-center">Поиск</div>
                        </a>

                    </li>

                    <li class="nav-item col text-end">
                        <a class="row" href="https://pow.thevladoss.site/shop/index.php"
                           style="text-decoration: none;color:black; margin-top: 30px">
                            <div class="col text-end p-0 align-self-center"><img src="../img/shopping-cart.png" style=""></div>
                            <div class="col text-start align-self-center">Магазин</div>
                        </a>

                    </li>
                    <li class="nav-item col text-end">
                        <a class="row" href="https://pow.thevladoss.site/lko/index.php"
                           style="text-decoration: none;color:black; margin-top: 30px">
                            <div class="col text-end p-0 align-self-center"><img src="../img/user.png" style=""></div>
                            <div class="col text-start align-self-center">Аккаунт</div>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr style="margin-top: -5px;color: #00dbc2"/>

    <?php
} else {
    ?>
    <nav class="navbar navbar-expand-lg " style="padding-top: 0px">
        <div class="container">

            <a class="navbar-brand" href="https://pow.thevladoss.site/index.php">
                <img src="../img/logo.png" alt="" style="filter:none " width="160" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav row w-100">
                    <li class="nav-item col text-end ">

                        <a class="row" href="https://pow.thevladoss.site/index.php"
                           style="text-decoration: none;color:black; margin-top: 30px">
                            <div class="col text-end p-0 align-self-center"><img src="../img/home.png" style=""></div>
                            <div class="col text-start align-self-center">Главная</div>
                        </a>
                    </li>
                    <li class="nav-item col text-end">

                        <a class="row" href="https://pow.thevladoss.site/search/index.php"
                           style="text-decoration: none;color:black; margin-top: 30px">
                            <div class="col text-end p-0 align-self-center"><img src="../img/search.png" style=""></div>
                            <div class="col text-start align-self-center">Поиск</div>
                        </a>
                    </li>
                    <li class="nav-item col text-end">
                        <a class="row" href="#" disabled
                           style="text-decoration: none;color:black; margin-top: 30px">
                            <div class="col text-end p-0 align-self-center"><img src="../img/users.png" style=""></div>
                            <div class="col text-start align-self-center">Команды</div>
                        </a>

                    </li>
                    <li class="nav-item col text-end">

                        <a class="row" href="https://pow.thevladoss.site/shop/index.php"
                           style="text-decoration: none;color:black; margin-top: 30px">
                            <div class="col text-end p-0 align-self-center"><img src="../img/shopping-cart.png" style=""></div>
                            <div class="col text-start align-self-center">Магазин</div>
                        </a>
                    </li>
                    <li class="nav-item col text-end">

                        <a class="row" href="https://pow.thevladoss.site/lk/index.php"
                           style="text-decoration: none;color:black; margin-top: 30px">
                            <div class="col text-end p-0 align-self-center"><img src="../img/user.png" style=""></div>
                            <div class="col text-start align-self-center">Аккаунт</div>
                            <p href="/index.php" class="" style="font-size:12px ; margin-top:-5px; padding-right: 50px"><img
                                        src="../img/award.png" style="color: #00DBC2; margin-right: 5px; " height="12px"
                                        width="12px" alt="">
                                <?= $_COOKIE['points'] ?> баллов</p>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr style="margin-top: -5px; color: #00dbc2"/>

    <?php
}
?>