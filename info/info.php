<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="../styles/custom/info.css">
</head>
<?php
require_once '../menu/nolognavbar.php';

?>

</head>

<body>
    <div class="container">
        <h1 class="mb-5 mt-5">Краткая информация</h1>
        <form>
            <div class="infocontainer p-5">
                <div class="row mb-3">
                    <div class="col"> <select class="form-select p-3" aria-label="Default select example" style="border:0; border-radius:30px">
                            <option selected>Какой тип волонтерской деятельности вы предпочитаете </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select></div>
                    <div class="col"> <select class="form-select  p-3" aria-label="Default select example" style="border:0; border-radius:30px">
                            <option selected>Сколько времени в неделю вы готовы заниматься волонтерством</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select></div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <select class="form-select p-3" aria-label="Default select example" style="border:0; border-radius:30px">
                            <option selected>Род Вашей деятельности</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col">
                        <select class="form-select p-3" aria-label="Default select example" style="border:0; border-radius:30px">
                            <option selected>Почему вы хотите заниматься волонтерством</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col"> <select class="form-select p-3" aria-label="Default select example" style="border:0; border-radius:30px">
                            <option selected>Уровень английского языка</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select></div>
                    <div class="col"> <input type="text" class="w-100 datainput p-3" placeholder="Адрес проживания"></div>
                </div>
                <div class="row mb-3">
                    <div class="col"> <textarea name="resume" class="textinput datainput p-3" id="resumeInput" style="resize: none;" cols="133" rows="8" placeholder="Краткое резюме"></textarea></div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-3 text-center">
                        <button type="submit" class="regbtn">Сохранить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>