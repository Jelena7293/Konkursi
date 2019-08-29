<?php

include_once '../config/loader_models.php';
include_once 'C:/xampp/htdocs/projekat/Models/helperModel.php';
if (HelperModel::isAjax()==true)
{
    $userModel = new usersModel();
    $users = $userModel->usersList();
    $exist2 = 0;

    if (isset($_GET['login']))
    {
        if ($_POST['username']!="" && $_POST['password']!="")
        {
            foreach ($users as $userr)
            {
                /*if ($userr['username'] != $_POST['username'] && $userr['password'] != $_POST['password'])
                {
                    $exist2++;
                    print json_encode(array('status' => false, 'message' => 'Korisnicko ime i lozinka nisu ispravni!'));
                }*/
                if ($userr['username'] == $_POST['username'])
                {
                    if ($userr['password'] != $_POST['password'])
                    {
                        $exist2++;
                        print json_encode(array('status' => false, 'message' => 'Lozinka nije ispravna!'));
                    }
                    /*$exist2++;
                    print json_encode(array('status' => false, 'message' => 'Korisnicko ime nije ispravno!'));*/
                }

            }
            if ($exist2 == 0)
            {
                print json_encode(array('status' => true));
            }
        }
        else
        {
            print json_encode(array('status' => false, 'message' => 'Popunite prazna polja!'));
        }
    }

}