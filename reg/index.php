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


<body>
    <?php
    require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/navbar/navbar.php';
    require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/services/const.php';
    require_once serverPath . '/services/UserService.php';


    if (isset($_POST['password'])) {
        var_dump($_POST);
        $answer = (new UserService)->signUp(name: $_POST['name'], last_name: $_POST['last_name'], email: $_POST['email'], password: $_POST['password'], birthday: $_POST['birthday'], sex: $_POST['sex'], phone: $_POST['phone']);
        if (!$answer) {?>
            Произошла ошибка. Попробуйте ввести другие данные.
        <?php } else {
            header('Location: https://pow.thevladoss.site/info/');
        }
    }

    ?>
    <div class="container">
        <h1 class="mb-5 mt-5">Регистрация</h1>
        <form method="post">
            <div class="regcontainer p-5">
                <div class="row mb-3">
                    <div class="col"> <input  name="last_name" class="datainput w-100 p-3" placeholder="Фамилия" id="surname" required></div>
                    <div class="col"> <input  name="name" class="datainput w-100 p-3" placeholder="Имя" id="name" required></div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="row bcontainer">
                            <div class="col-3 align-self-center">Дата рождения:</div>
                            <div class="col"><input name="birthday" type="date" class="datainput w-100 p-3" placeholder="Дата рождения" id="date" required></div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="row p-3">
                            <div class="col-2">Пол:</div>
                            <div class="col-3"><input name="sex" class="col" id="maleChoice" type="radio" value="male" required> <label for="maleChoice">Мужской</label></div>
                            <div class="col-3"><input name="sex" class="col" id="femaleChoice" type="radio" value="female" required> <label for="femaleChoice">Женский</label></div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col"> <input  name="phone" class="datainput w-100 p-3" placeholder="Номер телефона" id="phonenumber" required></div>
                    <div class="col"> <input  name="email" class="datainput w-100 p-3" placeholder="Почта" id="mail" aria-describedby="emailHelp" required></div>
                </div>
                <div class="row mb-3">
                    <div class="col"> <input  type="password" name="password" class="datainput w-100 p-3" placeholder="Пароль" id="password" required></div>
                    <div class="col"> <input  type="password" class="datainput w-100 p-3" placeholder="Повторите пароль" id="repeatPassword" required></div>
                </div>
                <div class="row">
                    <div class="col"><input type="checkbox" class="form-check-input" id="accept">
                        <label class="form-check-label" for="exampleCheck1">Согласие на обработку персональных данных</label>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-3 text-center">
                        <button type="submit" class="regbtn">Зарегистрироваться</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>