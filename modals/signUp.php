<?php

include_once "config/loader_models.php";

$usersModel = new usersModel();
$professionModel=new professionModel();
$typeProfession=$professionModel->typeProfession();

/*if (isset($_POST['registration']))
{
    if ($_POST["userType"]!="select" && $_POST["professionSelect"]!="selectProfession")
    {
        $usersModel->signUp($_POST);
    }
    else{
        echo "Izaberite tip korisnika i struku";
    }
}*/

/*if (isset($_POST['registration']))
{
    $emp_firstname = trim($_POST["firstname"]);
    $emp_lastname = trim($_POST["lastname"]);
    $emp_email = trim($_POST["email"]);
    $emp_userType = trim($_POST["userType"]);
    $emp_professionSelect = trim($_POST["professionSelect"]);
    $emp_name = trim($_POST["name"]);
    $emp_password = trim($_POST["password"]);

    if($emp_firstname == "")
    {
        $errorMsg = "Greška! Morate unijeti ime.";
        $code = "1";
    }
    elseif($emp_lastname == "")
    {
        $errorMsg = "Greška! Morate unijeti prezime.";
        $code = "2";
    }
    elseif($emp_email == "")
    {
        $errorMsg = "Greška! Morate unijeti email.";
        $code = "3";
    }
    elseif($emp_userType == "select")
    {
        $errorMsg = "Greška! Morate izabrati tip korisnika.";
        $code = "4";
    }
    elseif($emp_professionSelect == "selectProfession")
    {
        $errorMsg = "Greška! Morate izabrati profesiju.";
        $code = "5";
    }
    elseif($emp_name == "")
    {
        $errorMsg = "Greška! Morate unijeti korisničko ime.";
        $code = "6";
    }
    elseif($emp_password == "")
    {
        $errorMsg = "Greška! Morate unijeti lozinku.";
        $code = "7";
    }

}*/

?>
<div class="modal" id="signUpModal">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #0a264b">
            <div class="modal-header">
                <h1 class="modal-title"  style="font: italic bold 48px Georgia serif; color: azure; text-shadow: 3px 3px black; ">Registracija</h1>
                <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
            <?php
            /*if (isset($errorMsg))
            {
                echo "<a style='color: red; font-weight:bold; text-align: center; margin-top: 10px; margin-bottom: -20px' class='message'>" .$errorMsg. "</a>";
            }*/
            ?>
            <form action="" method="post" id="signUpForm" autocomplete="off" autocomplete="off">
                <div class="alert alert-warning" role="alert" id="signUpMessage" hidden="true"></div>
                <div class="modal-body" style="font: italic bold 22px Georgia serif; color: azure; text-shadow: 1px 1px black; ">
                    <div class="form-group">
                        <label for="firstname">Ime:</label>
                        <input type="text" class="border form-control" id="first_name" name="firstname" placeholder="Unesite ime" >
                    </div>
                    <div class="form-group">
                        <label for="lastname">Prezime:</label>
                        <input type="text" class="border form-control" id="last_name" name="lastname" placeholder="Unesite prezime" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="border form-control" id="signUpEmail" name="email" placeholder="Unesite email" >
                    </div>
                    <div class="form-group ">
                        <label for="usertype">Tip korisnika:</label>
                        <div class="row">
                            <div class="col-sm-12" id="select">
                                <select name="userType"  class="custom-select" >
                                    <option value="select">- - - -</option>
                                    <option value="profesor">Profesor</option>
                                    <option value="student">Student</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="profession">Struka:</label>
                        <div class="row">
                            <div class="col-sm-12" id="selectProfession">
                                <select class="custom-select" name="professionSelect" >
                                    <option value="selectProfession">Izaberite oblast struke</option>
                                    <?php foreach ($typeProfession as $professionSelect): ?>
                                    <option value="<?= $professionSelect['id_profession']; ?>"><?= $professionSelect['profession_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Korisničko ime:</label>
                        <input type="text" class="border form-control" id="signUpUsername" name="name" placeholder="Unesite korisničko ime" >
                    </div>
                    <div class="form-group">
                        <label for="pwd">Lozinka:</label>
                        <input type="password" class="border form-control" id="signUpPwd" name="password" placeholder="Unesite lozinku" >
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="modal-footer row">
                        <button type="button" class="btn btn-info" id="registration" name="registration">Registracija</button>

                    </div>
                    <div class="row" style="font: italic bold 16px Georgia serif; color: azure; text-shadow: 1px 1px black; margin: 10px">
                        <div  style="margin: 5px">
                            <a >Registrovani ste? </a>
                        </div>
                        <div>
                            <button id="signLogin" type="submit" class="btn btn-primary btn-sm">Uloguj se</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
