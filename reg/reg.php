<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../styles/custom/reg.css">
</head>
<?php
require_once '../menu/nolognavbar.php';

?>

<body>
    <div class="container">
        <h1>Регистрация</h1>
        <div class="regcontainer p-5">
            <div class="row mb-3">
                <div class="col"> <input type="email" class="datainput w-100 p-3" placeholder="Фамилия" id="exampleInputEmail1" aria-describedby="emailHelp"></div>
                <div class="col"> <input type="email" class="datainput w-100 p-3" placeholder="Имя" id="exampleInputEmail1" aria-describedby="emailHelp"></div>
            </div>
            <div class="row mb-3">
                <div class="col"> <input type="email" class="datainput w-100 p-3" placeholder="Дата рождения" id="exampleInputEmail1" aria-describedby="emailHelp"></div>
                <div class="col">
                     <div class="row p-3">
                        <div class="col-2">Пол:</div>
                        <div class="col-3"><input name="dzen" class="col" id="maleChoice" type="radio" value="nedzen"> <label for="maleChoice">Мужской</label></div>
                        <div class="col-3"><input name="dzen" class="col" id="femaleChoice" type="radio" value="nedzen"> <label for="femaleChoice">Женский</label></div>
                    </div></div>
            </div>
            <div class="row mb-3">
                <div class="col"> <input type="email" class="datainput w-100 p-3" placeholder="Номер телефона" id="exampleInputEmail1" aria-describedby="emailHelp"></div>
                <div class="col"> <input type="email" class="datainput w-100 p-3" placeholder="Почта" id="exampleInputEmail1" aria-describedby="emailHelp"></div>
            </div>
            <div class="row mb-3">
                <div class="col"> <input type="email" class="datainput w-100 p-3" placeholder="Пароль" id="exampleInputEmail1" aria-describedby="emailHelp"></div>
                <div class="col"> <input type="email" class="datainput w-100 p-3" placeholder="Повторите пароль" id="exampleInputEmail1" aria-describedby="emailHelp"></div>
            </div>
            <div class="row">
                <div class="col"><input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Согласие на обработку персональных данных</label>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-3 text-center">
                <button type="submit" class="regbtn p-2 pl-3 pr-3">Зарегистрироваться</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>