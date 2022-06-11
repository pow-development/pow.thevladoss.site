<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../styles/custom/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;0,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    require_once '../menu/nolognavbar.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3" style="padding-left: 0px;">
                <img src="../img/hands.png" class="img-fluid" alt="">
            </div>
            <div class="col-2"></div>
            <div class="col-2"></div>
            <div class="col-2 mt-5">
                <div>
                    <p class="mb-0 sl">Помочь</p>
                    <p class="mb-0 sl">может</p>
                    <p class="mb-0 sl">каждый!</p>
                </div>
                <p>Стоит только начать. Всё в твоих руках.
                    Присоединяйся к нашей команде волонтеров
                    Здесь будет ещё какой-то мотивационный текст, но я его не придумала </p>
                <button class="w-100 p-2 mainbtn mb-3" style="background-color: #00DBC2; border: 0px;" onclick="logBtn()">Войти</button>
                <button class="w-100 p-2 mainbtn mb-3" onclick="regBtn()">Зарегистрироваться как волонтер</button>
                <button class="w-100 p-2 mainbtn mb-3" onclick="regBtn()">Зарегистрироваться как организатор</button>
            </div>
        </div>
    </div>
    <script>
        function regBtn() {
            window.location.href = "../reg/index.php";
        }

        function logBtn() {
            window.location.href = "../login/index.php";
        }
    </script>
</body>

</html>