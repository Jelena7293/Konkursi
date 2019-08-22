<?php

include_once "config/loader_models.php";

$usersModel = new usersModel();
$professionModel=new professionModel();
$typeProfession=$professionModel->typeProfession();



if (isset($_POST['registration']))
{
    if ($_POST["userType"]!="select" && $_POST["professionSelect"]!="selectProfession")
    {
        $usersModel->signUp($_POST);
    }
    else{
        echo "Izaberite tip korisnika i struku";
    }
}
?>
<div class="modal" id="signUpModal">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #0a264b">
            <div class="modal-header">
                <h1 class="modal-title"  style="font: italic bold 48px Georgia serif; color: azure; text-shadow: 3px 3px black; ">Registracija</h1>
                <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
            <form action="" method="post" id="signUpForm" autocomplete="off">
                <div class="alert alert-warning" role="alert" id="signUpMessage" hidden="true"></div>
                <div class="modal-body" style="font: italic bold 22px Georgia serif; color: azure; text-shadow: 1px 1px black; ">
                    <div class="form-group">
                        <label for="firstname">Ime:</label>
                        <input type="text" class="border form-control" id="firstName" name="firstname" placeholder="Unesite ime" required>
                        <!--<div class="valid-feedback d-block">Valid.</div>
                        <div class="invalid-feedback d-block">Please fill out this field.</div>-->
                    </div>
                    <div class="form-group">
                        <label for="lastname">Prezime:</label>
                        <input type="text" class="border form-control" id="lastName" name="lastname" placeholder="Unesite prezime" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="border form-control" id="email" name="email" placeholder="Unesite email" required>
                    </div>
                    <div class="form-group ">
                        <label for="usertype">Tip korisnika:</label>
                        <select id="userType" name="userType"  type="text" class="form-control dropdown-toggle" data-toggle="dropdown" required>
                            <option value="select">- - - -</option>
                            <option value="profesor">Profesor</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="profession">Struka:</label>
                        <!--<input type="text" class="border form-control" id="profession" name="profession" placeholder="Izaberite oblast struke">-->
                        <div class="row">
                            <div class="col-sm-12" id="selectProfession">
                                <select class="custom-select" name="professionSelect" required>
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
                        <input type="text" class="border form-control" id="signUpUsername" name="name" placeholder="Unesite korisničko ime" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Lozinka:</label>
                        <input type="password" class="border form-control" id="signUpPwd" name="password" placeholder="Unesite lozinku" required>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="modal-footer row">
                        <button type="submit" class="btn btn-info" id="registration" name="registration">Registracija</button>
                    </div>
                    <div class="row" style="font: italic bold 16px Georgia serif; color: azure; text-shadow: 1px 1px black; margin: 10px">
                        <div  style="margin: 5px">
                            <a >Registrovani ste? </a>
                        </div>
                        <div>
                            <button id="signLogin" type="button" class="btn btn-primary btn-sm">Uloguj se</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
