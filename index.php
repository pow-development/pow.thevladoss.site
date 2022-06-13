<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="styles/custom/nav.css">
    <link rel="stylesheet" href="styles/custom/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
</head>

<body>
<?php
require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/navbar/navbar.php';
?>
<div class="container-fluid">

    <div class="row">
        <div class="col-3" style="padding-left: 0px;">
            <img src="../img/hands.png" class="img-fluid" alt="">
        </div>
        <div class="col-1 ">
        </div>
        <div class="col-2 mt-5">
            <div>
                <p class="mb-0 sl" style="font-weight:900;font-size: 96px">Помочь</p>
                <p class="mb-0 sl" style="margin-top: -80px;font-weight:900;font-size: 96px">может</p>
                <p class="mb-0 sl" style="margin-top: -80px;font-weight:900;font-size: 96px">каждый!</p>
            </div>
            <h3 class="mt-2" style="width: 400px">Присоединяйтесь к нашему комьюнити волонтёров!</h3>
            <h3 class="mt-2" style="width: 400px">С нами вы можете:</h3>
            <ul>
                <li style="width: 400px">Завести новые знакомства</li>
                <li style="width: 400px">Получить крутые призы</li>
                <li style="width: 400px">Выиграть путешествие для всей семьи или компании друзей</li>
                <li style="width: 400px">Помочь благотворительным организациям</li>
                <li style="width: 400px">И многое другое!</li>
            </ul>
            <?php
            if (!isset($_COOKIE['type'])) {
                ?>
                <button class=" p-2 mainbtn mb-3"
                        style="width: 325px;background-color: #00DBC2; border: 0px; color:#F5F5F2" onclick="logBtn()">
                    Войти
                </button>
                <button class="p-2 mainbtn mb-3" style="width: 325px" onclick="regBtn()">Зарегистрироваться как
                    волонтер
                </button>
                <button class=" p-2 mainbtn mb-3" style="width: 325px" disabled onclick="regBtn()">Зарегистрироваться
                    как организатор
                </button>
            <?php } else { ?>
                <button class="w-100 p-2 mainbtn mb-3" onclick="lkBtn()">Личный кабинет</button>
            <?php } ?>
        </div>
        <div class="col-1"></div>
        <div class="col-4 text-center">
            <img src="../img/circles.png" style="margin-top: 100px; margin-left: 100px " class="img-fluid " alt="">
        </div>

    </div>
</div>


<footer>
    <div class="container-fluid text-center p-5" style="background-color: rgba(0, 219, 194, 0.15); ">
        <p>
            Разработано в рамках хакатона Moscow City Hack 2022
        </p>
        <p>
            © pow(), 2022
        </p>
    </div>
</footer>
<script>
    function regBtn() {
        window.location.href = "reg/index.php";
    }

    function lkBtn() {
        window.location.href = "lk/index.php";
    }

    function logBtn() {
        window.location.href = "login/index.php";
    }
</script>
</body>

</html>