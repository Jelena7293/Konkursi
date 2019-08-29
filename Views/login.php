<?php

include_once 'config/loader_models.php';
$userModel = new usersModel();

if (isset($_POST['username']))
{
    $userModel->login($_POST);

}
