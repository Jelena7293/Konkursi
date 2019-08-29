<?php
include_once "C:/xampp/htdocs/projekat/config/loader_models.php";
//$users = new usersModel();
$approvedModel = new approvedModel();
if(isset($_POST["userProfileId"]))
{
    $output2 = '';
    //$user = $users->usersList($_POST["userProfileId"]);
    $app = $approvedModel->getUserForApproved($_POST["userProfileId"]);
    $output2 .= '
        <input type="text" class="border form-control" id="idUser" name="idUser" hidden value="'.$app['id_user'].'">
        <div class="form-group">
            <label for="firstname">Ime:</label>
            <input type="text" class="border form-control" id="first_name" name="firstname" value="'.$app['first_name'].'">
        </div>
        <div class="form-group">
            <label for="lastname">Prezime:</label>
            <input type="text" class="border form-control" id="last_name" name="lastname"  value="'.$app['last_name'].'">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="border form-control" id="signUpEmail" name="email"  value="'.$app['email'].'">
        </div>
        <div class="form-group ">
            <label for="usertype">Tip korisnika:</label>
            <input type="text" class="border form-control" id="userType" name="userType"  value="'.$app['user_type'].'">
        </div>
        <div class="form-group">
            <label for="profession">Struka:</label>
            <input type="text" class="border form-control" id="professionSelect" name="professionSelect"  value="'.$app['profession_name'].'">
        </div>
        <div class="form-group">
            <label for="username">Korisničko ime:</label>
            <input type="text" class="border form-control" id="signUpUsername" name="name"  value="'.$app['username'].'">
        </div>
        <div class="form-group">
            <label for="pwd">Lozinka:</label>
            <input type="text" class="border form-control" id="signUpPwd" name="password"  value="'.$app['password'].'">
        </div>
    ';
    echo $output2;
}