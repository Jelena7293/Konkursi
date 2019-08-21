<?php

session_start();
include_once "config/loader_models.php";
$usersModel = new usersModel();

if (isset($_POST['login']))
{
    $check = $usersModel -> login($_POST);
    if ($check == true)
    {

        //header('Location:index.php/adminPage');
        //echo "usla";
    }
    else
    {
        echo '<div style="width:500px" class="alert alert-warning container">
            <strong>Upozorenje!</strong> Unijeli ste pogrešne ili nepotpune podatke!</div>';
    }
}


?>
<div class="modal" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #0a264b">
            <div class="modal-header">
                <h1 class="modal-title"  style="font: italic bold 48px Georgia serif; color: azure; text-shadow: 3px 3px black; ">Login</h1>
                <button type="button" class="close" data-dismiss="modal">X</button>
            </div>
            <form action="" method="post" id="loginForm" autocomplete="off">
                <div class="alert alert-warning" role="alert" id="loginMessage" hidden="true"></div>
                <div class="modal-body" style="font: italic bold 22px Georgia serif; color: azure; text-shadow: 1px 1px black; ">
                    <div class="form-group">
                        <label for="username">Korisničko ime:</label>
                        <input type="text" class="border form-control" id="loginUsername" name="username" placeholder="Unesite korisničko ime">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Lozinka:</label>
                        <input type="password" class="border form-control" id="loginPwd" name="password" placeholder="Unesite lozinku">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="modal-footer row">
                        <button type="submit" class="btn btn-primary" name="login">Uloguj se</button>
                    </div>
                    <div class="row" style="font: italic bold 16px Georgia serif; color: azure; text-shadow: 1px 1px black; margin: 10px">
                        <div  style="margin: 5px">
                            <a >Niste registrovani? </a>
                        </div>
                        <div>
                           <button id="loginSign" type="button" class="btn btn-primary btn-sm">Registruj se</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
//include "Models/usersModel.php";

?>