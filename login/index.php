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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;1,900&display=swap" rel="stylesheet"> 

</head>


<body>
    <main>
        <?php
        require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/navbar/navbar.php';
        require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/services/const.php';
        require_once serverPath . '/services/UserService.php';

        if (isset($_POST['password'])) {
            $answer = (new UserService)->signIn(email: $_POST['email'], password: $_POST['password']);
            if (!$answer) {?>
                Просто ты тупой
            <?php } else {
                header('Location: https://pow.thevladoss.site/');
            }
        }

        ?>
        <div class="container logcontainer mt-5">
            <div class="row">
                <div class="col-4  text-center logimg" style="padding-left: 0px; padding-right:0px">
                    <img src="../img/log.png" class="img-fluid img" alt="">
                </div>
                <div class="col-8 ">
                    <div class="m-3">
                        <h1 class="logtext text">Вход</h1>
                    </div>
                    <form method="post">
                        <div class="m-3">
                            <label for="inputEmail">Почта</label>
                            <input name="email" type="email" class="loginput w-100" id="inputEmail" placeholder="email@example.com" aria-describedby="emailHelp" required>
                        </div>
                        <div class="m-3">
                            <label for="inputPassword">Пароль</label>
                            <input name="password" type="password" class="loginput w-100" id="inputPassword" placeholder="Password" aria-describedby="passwordHelpBlock" required>
                        </div>
                        <div class="row align-middle ">
                        <button type="submit" class="logbtn col-4  m-4">Войти</button>
                        <a class="col-6 align-self-center alog" href='https://pow.thevladoss.site/reg/'>Ещё нет аккаунта? Зарегистрироваться </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
</body>

</html>