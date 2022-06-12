<?php
    require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/services/UserService.php';

    if(isset($_GET['logout'])) {
        (new UserService())->signOut();
        header('Location: https://pow.thevladoss.site');
    }

    if (!isset($_COOKIE['email'])) {
?>
    <nav class="navbar navbar-expand-lg nav" id="nav" >
        <div class="container nav" >
            <div style=""> <a href="https://pow.thevladoss.site/index.php" class="navbar-brand" style="color:#00DBC2 ;margin-right:0px ;">poW<a class="navbar-brand text-start" href="https://pow.thevladoss.site/index.php">Волонтерим</a></a>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse row justify-content-end" id="navbarSupportedContent">
                    <div class="col-3 align-self-end">
                        <button class="btn" onclick="logBtn()"><img src="../img/log-in.png" width="15px" height="15px" class="icon"> Вход</button>
                        <button class="btn" onclick="regBtn()"><img src="../img/user-plus.png" width="15px" height="15px" class="icon"> Регистрация</button>
                    </div>
                </div>
            </div>

    </nav>
    <hr style="color:  color:#00DBC2 ;"/>
    <script>
        function regBtn() {
            window.location.href = "https://pow.thevladoss.site/reg/index.php";
        }

        function logBtn() {
            window.location.href = "https://pow.thevladoss.site/login/index.php";
        }
    </script>
<?php
} else {
?>
    <nav class="navbar navbar-expand-lg " style="padding-top: 0px">
        <div class="container">
           <!-- <div style="margin-top: -20px;"> <a href="https://pow.thevladoss.site/index.php" class="navbar-brand" style="color:#00DBC2 ;margin-right: 0px">poW<a class="navbar-brand" href="https://pow.thevladoss.site/index.php">Волонтерим</a></a>
            </div>-->
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" alt="" width="160" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav row w-100">
                    <li class="nav-item col text-end ">
                        <a class="nav-link active menu" aria-current="page" href="https://pow.thevladoss.site/index.php"><img src="../img/home.png" class="icon" height="14px" width="14px" alt="" style="">Главная</a>

                    </li>
                    <li class="nav-item col text-end">
                        <a class="nav-link active menu" aria-current="page" href="https://pow.thevladoss.site/search/index.php"><img src="../img/search.png" class="icon" height="14px" width="14px" alt="" style="margin-right: 3px"> Поиск</a>
                    </li>
                    <li class="nav-item col text-end">

                        <a class="nav-link active menu" aria-current="page" href="?logout=yes"><img src="../img/users.png" height="14px" width="14px" class="icon" alt=""> Команды</a>
                    </li>
                    <li class="nav-item col text-end">
                        <a class="nav-link active menu" aria-current="page" href="https://pow.thevladoss.site/shop/index.php"><img src="../img/shopping-cart.png" class="icon" height="14px" width="14px" alt=""> Магазин</a>
                    </li>
                    <li class="nav-item col text-end">
                        <a class="nav-link active menu" aria-current="page" href="https://pow.thevladoss.site/lk/index.php"><img src="../img/user.png" height="14px"  class="icon" width="14px" alt="" style="margin-right: 7px">Аккаунт</a>
                        <p href="/index.php" class="" style="font-size:12px ; margin-top:-10px; margin-right:8px"><img src="../img/award.png" style="color: #00DBC2; margin-right: 5px; " height="12px" width="12px" alt="">111 баллов</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr style="margin-top: -10px"/>
<?php
}
?>