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
                            <button class="" onclick="logBtn()" style="border: 0px; background-color: white"><img
                                        src="../img/log-in.png" width="15px" height="15px" class="icon"> Вход
                            </button>
                        </li>
                        <li class="col nav-item text-end">
                            <button class="" onclick="regBtn()" style="border: 0px; background-color: white"><img
                                        src="../img/user-plus.png" width="15px" height="15px" class="icon"> Регистрация
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </nav>
    <hr style="margin-top: -10px"/>
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
                        <a class="nav-link active menu" aria-current="page" style="margin-top: 11px"
                           href="https://pow.thevladoss.site/index.php"><img src="../img/main(1).png" class="icon"
                                                                             height="25px" width="100px" alt=""
                                                                             style=""></a>

                    </li>
                    <li class="nav-item col text-end">
                        <a class="nav-link active menu" style="margin-top: 11px" aria-current="page" href="#"><img
                                    src="../img/srch.png" class="icon" height="25px" width="100px" alt=""
                                    style="margin-right: 3px"></a>
                    </li>

                    <li class="nav-item col text-end">
                        <a class="nav-link active menu" style="margin-top: 11px" aria-current="page" href="#"><img
                                    src="../img/shop.png" class="icon" height="25px" width="100px" alt=""></a>
                    </li>
                    <li class="nav-item col text-end">
                        <a class="nav-link active menu" style="margin-top: 11px" aria-current="page"
                           href="https://pow.thevladoss.site/lko/index.php"><img src="../img/account.png" height="25px"
                                                                                 class="icon" width="100px" alt=""
                                                                                 style="margin-right: 7px"></a>
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
            <!-- <div style="margin-top: -20px;"> <a href="https://pow.thevladoss.site/index.php" class="navbar-brand" style="color:#00DBC2 ;margin-right: 0px">poW<a class="navbar-brand" href="https://pow.thevladoss.site/index.php">Волонтерим</a></a>
             </div>-->
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
                        <a class="nav-link active menu" aria-current="page" style="margin-top: 11px"
                           href="https://pow.thevladoss.site/index.php"><img src="../img/main(1).png" class=""
                                                                             height="25px" width="100px" alt="" style=""></a>

                    </li>
                    <li class="nav-item col text-end">
                        <a class="nav-link active menu" style="margin-top: 11px" aria-current="page"
                           href="https://pow.thevladoss.site/search/index.php"><img src="../img/srch.png" class=""
                                                                                    height="25px" width="100px" alt=""
                                                                                    style="margin-right: 3px"></a>
                    </li>
                    <li class="nav-item col text-end">

                        <a class="nav-link active menu" style="margin-top: 11px" aria-current="page" href="#"><img
                                    src="../img/teams.png" height="25px" width="100px" class="" alt=""></a>
                    </li>
                    <li class="nav-item col text-end">
                        <a class="nav-link active menu" style="margin-top: 11px" aria-current="page"
                           href="https://pow.thevladoss.site/shop/index.php"><img src="../img/shop.png"
                                                                                  class="" height="25px"
                                                                                  width="100px" alt=""></a>
                    </li>
                    <li class="nav-item col text-end">
                        <a class="nav-link active menu" style="margin-top: 11px" aria-current="page"
                           href="https://pow.thevladoss.site/lk/index.php"><img src="../img/account.png" height="25px"
                                                                                class="icon" width="100px" alt=""
                                                                                style="margin-right: 7px"></a>
                        <!--                        <p href="/index.php" class="" style="font-size:12px ; margin-top:-10px; margin-right:8px"><img src="../img/award.png" style="color: #00DBC2; margin-right: 5px; " height="12px" width="12px" alt="">-->
                        <?//=$_COOKIE['points']?><!-- баллов</p>-->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr style="margin-top: -5px; color: #00dbc2"/>

    <?php
}
?>