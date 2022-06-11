<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NologNavbar</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.js"></script>

    <!--CSS-->
    <link rel="stylesheet" href="../styles/custom/nav.css">

</head>

<body >
    <nav class="navbar navbar-expand-lg nav" id="nav">
        <div class="container nav">

            <a class="navbar-brand logostart" href="../main/main.php">poW</a>
            <a class="navbar-brand logoend" href="../main/main.php">Волонтерим</a>
           
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse row justify-content-end" id="navbarSupportedContent">
                <div class="col-3 align-self-end" >
                    <button class="btn" onclick="logBtn()"><img src="../img/log-in.png" width="15px" height="15px" class="icon"> Вход</button>
                    <button class="btn" onclick="regBtn()"><img src="../img/user-plus.png" width="15px" height="15px" class="icon"> Регистрация</button>
                </div>
            </div>
        </div>
       
    </nav>
    <hr/>
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