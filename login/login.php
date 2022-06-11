<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../styles/custom/log.css">

</head>
<?php
require_once '../menu/nolognavbar.php';

?>

<body>
    <div class="container logcontainer mt-5">
        <div class="row">
            <div class="col-4 logimg text-center">
                <img src="../img/log.png" height="400px" width="400px" alt="">
            </div>
            <div class="col-8 align-self-center">
                <div class="">
                    <h1>
                        Вход
                    </h1>
                </div>
                <form>
                    <div class="mb-3">

                        <input type="email" class="loginput w-100" id="exampleInputEmail1" placeholder="Логин" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="loginput w-100" id="exampleInputEmail1" placeholder="Пароль" aria-describedby="emailHelp">

                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>