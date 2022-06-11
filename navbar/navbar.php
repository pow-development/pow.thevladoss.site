<?php
require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/services/UserService.php';

if(isset($_GET['logout'])) {
    (new UserService())->signOut();
    header('Refresh:0');
}

if (!isset($_COOKIE['email'])) {
?>
    <nav class="navbar navbar-expand-lg nav" id="nav">
        <div class="container nav">

            <a class="navbar-brand logostart" href="index.php">poW</a>
            <a class="navbar-brand logoend" href="index.php">Волонтерим</a>

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
    <hr />
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div style="margin-top: -20px;"> <a href="" class="navbar-brand" style="color:#00DBC2 ;">poW<a class="navbar-brand" href="../index.php">Волонтерим</a></a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav row w-100">
                    <li class="nav-item col text-end">
                        <a class="nav-link active " aria-current="page" href="#"><img src="../img/home.png" height="16px" width="16px" alt="">Главная</a>

                    </li>
                    <li class="nav-item col text-end">
                        <a class="nav-link active " aria-current="page" href="#"><img src="../img/search.png" height="16px" width="16px" alt=""> Поиск</a>
                    </li>
                    <li class="nav-item col text-end">

                        <a class="nav-link active " aria-current="page" href="#"><img src="../img/users.png" height="16px" width="16px" alt=""> Команды</a>
                    </li>
                    <li class="nav-item col text-end">
                        <a class="nav-link active"  aria-current="page" href="#"><img src="../img/shopping-cart.png" height="16px" width="16px" alt=""> Магазин</a>
                    </li>
                    <li class="nav-item col text-end">
                        <a class="nav-link active " aria-current="page" href="?logout=yes"><img src="../img/user.png" height="16px" width="16px" alt="">Аккаунт</a>
                        <p href="/index.php" class="" style="font-size:10px ; margin-top:-10px; margin-right:8px"><img src="../img/award.png" style="color: #00DBC2;" height="10px" width="10px" alt="">111 баллов</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr />
<?php
}
?>