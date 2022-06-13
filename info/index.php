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
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

</head>


<body>
<?php
require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/navbar/navbar.php';
require_once '/home/users/o/osinvladislav/domains/pow.thevladoss.site/services/UserService.php';
if (isset($_POST['time_variety'])) {
    (new UserService())->fillForm(id: $_COOKIE['id'], address: $_POST['address'], resume: $_POST['resume'], occupation_id: $_POST['occupation_variety'], time_id: $_POST['time_variety'], english_id: $_POST['english_variety']);
    (new UserService())->fillCategory(id: $_COOKIE['id'], categories_id: $_POST['category_variety']);
    (new UserService())->fillAim(id: $_COOKIE['id'], aims_id: $_POST['aims_varieties']);
    header('Location: https://pow.thevladoss.site/lk/');
}

?>


<div class="container">
    <h1 class="mb-5 mt-5">Краткая информация</h1>
    <form method="post">
        <div class="infocontainer p-5">
            <div class="row mb-3">
                <div class="col"><label for="" class="">Какой тип волонтерской деятельности вы предпочитаете</label>
                    <select name="category_variety[]" class="form-select p-3" multiple required>
                        <?php
                        $varies = (new UserService())->getCategoryVariety();
                        foreach ($varies as $vary) {
                            ?>
                            <option value="<?= $vary->id ?>"><?= $vary->name ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col">
                    <label for="" class="ml-3">Сколько часов в неделю вы готовы заниматься волонтерством</label>
                    <select name="time_variety" class="form-select  p-3" aria-label="Default select example"
                            style="border:0; border-radius:30px" required>
                        <?php
                        $varies = (new UserService())->getTimeVariety();
                        foreach ($varies as $vary) {
                            ?>
                            <option value="<?= $vary->id ?>"><?= $vary->name ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="">Род Вашей деятельности</label>
                    <select name="occupation_variety" class="form-select p-3" aria-label="Default select example"
                            style="border:0; border-radius:30px" required>
                        <?php
                        $varies = (new UserService())->getOccupationVariety();
                        foreach ($varies as $vary) {
                            ?>
                            <option value="<?= $vary->id ?>"><?= $vary->name ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col"><label for="" class="">Почему вы хотите заниматься волонтерством</label>
                    <select name="aims_varieties[]" class="form-select p-3" multiple required>
                        <?php
                        $varies = (new UserService())->getAimVariety();
                        foreach ($varies as $vary) {
                            ?>
                            <option value="<?= $vary->id ?>"><?= $vary->name ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="">Уровень английского языка</label>
                <div class="col"><select name="english_variety" class="form-select p-3"
                                         aria-label="Default select example" style="border:0; border-radius:30px"
                                         required>
                        <?php
                        $varies = (new UserService())->getEnglishVariety();
                        foreach ($varies as $vary) {
                            ?>
                            <option value="<?= $vary->id ?>"><?= $vary->name ?></option>
                        <?php } ?>
                    </select></div>
                <div class="col">
                    <input name="address" type="text" class="w-100 datainput p-3" placeholder="Адрес проживания"
                           required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col"><textarea name="resume" class="textinput datainput p-3 w-100" id="resumeInput"
                                           style="resize: none;" rows="8" placeholder="Краткое резюме"
                                           required></textarea></div>

            </div>

            <div class="row justify-content-center">
                <div class="col-3 text-center">
                    <button type="submit" class="regbtn">Сохранить</button>
                </div>
            </div>
        </div>
    </form>
</div>
<footer style="margin-top: 150px;">
    <div class="container-fluid text-center p-5 mt-5 " style="background-color: rgba(0, 219, 194, 0.15); ">
        <p>
            Разработано в рамках хакатона Moscow City Hack 2022
        </p>
        <p>
            © pow(), 2022
        </p>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>