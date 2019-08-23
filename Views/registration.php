<?php
include_once 'config/loader_models.php';
$activityModel = new activityModel();
$typeActivity = $activityModel->typeActivity();
$userModel = new usersModel();

if (isset($_POST['name']))
{
    $userModel->signUp($_POST);
    $users=$userModel->users();
    $admin = $userModel->adminInfo();
    $id_last_user = $userModel->maxId();
    $link = 'http://localhost/projekat/index.php?view=studentPage&id='.$id_last_user;
    $headers = "Content-type: text/html\r\n";
    $msg = "Postovani,<br><br>Stigla je registracija novog clana!<br>
            Njegovo ime je: ".$_POST['firstname']."<br>
            Provjerite podatke i dozvolite registraciju na sledeci link:<a href='.$link.'>Podaci o korisniku</a>
            <br><br>Pozdrav,<br>Univerzitet u Istocnom Sarajevu";
    if (mail($admin['email'], "Registracija novog korisnika!",$msg,$headers))
    {
        echo '</br><div style="width: 500px;" class="alert alert-warning container" role="alert">Nakon odobrenja registracije bicete obavijesteni putem vase email adrese!</div>';
    }
    else
    {
        echo "error";
    }
}
