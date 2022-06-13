<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../styles/custom/shop.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

</head>

<body>
 <?php
 require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/navbar/navbar.php';
   ?>

    <div class="container">
        <h1 class="mt-5">Магазин</h1>
        <div class="row justify-content-between">
            <div class="col align-self-center "><h2>Мерч</h2></div>
            <div class="col text-end m-5"><button style="width: 300px;">Отправить баллы на благотворительность</button></div>
        </div>
        <div class="row w-100 justify-content-between">

            <div class="col text-center">
                <a href="#" class="product"><img src="../img/Group 2.png" height="300px" width="300px" alt=""></a>
            </div>
            <div class="col text-center">
                <a href="#" class="product"><img src="../img/t-shirt.png" height="300px" width="300px" alt=""></a>
            </div>
            <div class="col text-center">
                <a href="#" class="product"><img src="../img/sweatshirt.png" height="300px" width="300px" alt=""></a>
            </div>
            <div class="col text-center">
                <a href="#" class="product"><img src="../img/t-shirt_2.png" height="300px" width="300px" alt=""></a>
            </div>

        </div>
        <p class="mt-5 mr-5"><h2>Поездки</h2></p>
        <div class="row  justify-content-start ">
            <div class="col-4 "> <a href="#" class=""><img src="../img/crimea.png" height="400px" width="400px" alt=""></a>
            </div>
            <div class="col-4 "> <a href="#" class=""><img src="../img/lake.png" height="400px" width="400px" alt=""></a>
            </div>
        </div>
        <p class="mt-5 mr-5"><h2>Благотворительность</h2></p>
        <div class="row  justify-content-start ">
            <div class="col "> <a href="#" class=""><img src="../img/fond.png" height="300px" width="300px" alt=""></a>
            </div>
            <div class="col "> <a href="#" class=""><img src="../img/hand.png" height="300px" width="300px" alt=""></a>
            </div>
            <div class="col "> <a href="#" class=""><img src="../img/heart.png" height="300px" width="300px" alt=""></a>
            </div>
            <div class="col "> <a href="#" class=""><img src="../img/2hand.png" height="300px" width="300px" alt=""></a>
            </div>
        </div>
    </div>
 <footer>
     <div class="container-fluid text-center p-5 mt-5" style="background-color: rgba(0, 219, 194, 0.15); ">
         <p>
             Разработано в рамках хакатона Moscow City Hack 2022
         </p>
         <p>
             © pow(), 2022
         </p>
     </div>
 </footer>
</body>

</html>