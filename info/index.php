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


<body>
    <?php
    require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/navbar/navbar.php';
    require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/services/UserService.php';
    ?>
    <div class="container">
        <h1 class="mb-5 mt-5">Краткая информация</h1>
        <form>
            <div class="infocontainer p-5">
                <div class="row mb-3">
                    <div class="col"> <label for="" class="">Какой тип волонтерской деятельности вы предпочитаете</label>
                        <select name="type_volunteering" class="form-select p-3" aria-label="Default select example" style="border:0; border-radius:30px">
                            <option value="1">не работаю</option>
                            <option value="2">учусь в школе</option>
                            <option value="3">учусь в СПО</option>
                            <option value="3">учусь в образовательной организации высшего образования</option>
                            <option value="3">работаю</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="" class="ml-3">Сколько часов в неделю вы готовы заниматься волонтерством</label>
                        <select name="time" class="form-select  p-3" aria-label="Default select example" style="border:0; border-radius:30px">
                            <option value="1">5-9</option>
                            <option value="2">10-14</option>
                            <option value="3">15-20</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="">Род Вашей деятельности</label>
                        <select name="type_activity" class="form-select p-3" aria-label="Default select example" style="border:0; border-radius:30px">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="">Почему вы хотите заниматься волонтерством</label>
                        <select name="reason" class="form-select p-3" aria-label="Default select example" style="border:0; border-radius:30px">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="">Уровень английского языка</label>
                    <div class="col"> <select name="english_level" class="form-select p-3" aria-label="Default select example" style="border:0; border-radius:30px">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select></div>
                    <div class="col">
                        <input name="address" type="text" class="w-100 datainput p-3" placeholder="Адрес проживания">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col"> <textarea name="resume" class="textinput datainput p-3 w-100" id="resumeInput" style="resize: none;" rows="8" placeholder="Краткое резюме"></textarea></div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-3 text-center">
                        <button name="save_btn" type="submit" class="regbtn">Сохранить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>