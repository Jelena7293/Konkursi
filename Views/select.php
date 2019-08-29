<?php
include_once "C:/xampp/htdocs/projekat/config/loader_models.php";
$users = new usersModel();
$approvedModel = new approvedModel();
if(isset($_POST["user_id"]))
{
    $output = '';

    $app = $approvedModel->getUserForApproved($_POST["user_id"]);
    $output .= '
        <input type="text" class="border form-control" id="idUser" name="idUser" hidden value="'.$app['id_user'].'">
        <div class="form-group">
                <label for="firstname">Ime:</label>
                <input type="text" class="border form-control" id="first_name" name="firstname" disabled value="'.$app['first_name'].'">
            </div>
            <div class="form-group">
                <label for="lastname">Prezime:</label>
                <input type="text" class="border form-control" id="last_name" name="lastname" disabled value="'.$app['last_name'].'">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="border form-control" id="signUpEmail" name="email" disabled value="'.$app['email'].'">
            </div>
            <div class="form-group ">
                <label for="usertype">Tip korisnika:</label>
                <input type="text" class="border form-control" id="userType" name="userType" disabled value="'.$app['user_type'].'">
            </div>
            <div class="form-group">
                <label for="profession">Struka:</label>
                <input type="text" class="border form-control" id="professionSelect" name="professionSelect" disabled value="'.$app['profession_name'].'">
            </div>
            <div class="form-group">
                <label for="username">Korisničko ime:</label>
                <input type="text" class="border form-control" id="signUpUsername" name="name" disabled value="'.$app['username'].'">
            </div>
            <div class="form-group">
                <label for="pwd">Lozinka:</label>
                <input type="text" class="border form-control" id="signUpPwd" name="password" disabled value="'.$app['password'].'">
            </div>
        ';
    echo $output;
}

//if(isset($_POST["userProfileId"]))
//{
//    $output2 = '';
//    $user = $users->usersList($_POST["userProfileId"]);
//    //$app = $approvedModel->getUserForApproved($_POST["userProfileId"]);
//    $output2 .= '
//        <input type="text" class="border form-control" id="idUser" name="idUser" hidden value="'.$user['id_user'].'">
//        <div class="form-group">
//                <label for="firstname">Ime:</label>
//                <input type="text" class="border form-control" id="first_name" name="firstname">'.$user['first_name'].'
//            </div>
//            <div class="form-group">
//                <label for="lastname">fdsf:</label>
//                <input type="text" class="border form-control" id="" name="" >dfsdfsdf
//            </div>
//            <div class="form-group">
//                <label for="lastname">Prezime:</label>
//                <input type="text" class="border form-control" id="last_name" name="lastname" disabled value="'.$user['last_name'].'">
//            </div>
//            <div class="form-group">
//                <label for="email">Email:</label>
//                <input type="text" class="border form-control" id="signUpEmail" name="email" disabled value="'.$user['email'].'">
//            </div>
//            <div class="form-group ">
//                <label for="usertype">Tip korisnika:</label>
//                <input type="text" class="border form-control" id="userType" name="userType" disabled value="'.$user['user_type'].'">
//            </div>
//            <div class="form-group">
//                <label for="profession">Struka:</label>
//                <input type="text" class="border form-control" id="professionSelect" name="professionSelect" disabled value="'.$user['profession_name'].'">
//            </div>
//            <div class="form-group">
//                <label for="username">Korisničko ime:</label>
//                <input type="text" class="border form-control" id="signUpUsername" name="name" disabled value="'.$user['username'].'">
//            </div>
//            <div class="form-group">
//                <label for="pwd">Lozinka:</label>
//                <input type="text" class="border form-control" id="signUpPwd" name="password" disabled value="'.$user['password'].'">
//            </div>
//        ';
//    echo $output2;
//}
