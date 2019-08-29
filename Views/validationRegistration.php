<?php

include_once '../config/loader_models.php';
include_once 'C:/xampp/htdocs/projekat/Models/helperModel.php';
if (HelperModel::isAjax()==true)
{
    $userModel = new usersModel();
    $users = $userModel->usersList();
    $exist = 0;

    if (isset($_GET['registration']))
    {
        if ($_POST['firstname']!="" && $_POST['lastname']!="" && $_POST['email']!="" && $_POST['userType']!="select" && $_POST['professionSelect']!="selectProfession" && $_POST['name']!="" && $_POST['password']!="")
        {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
                foreach ($users as $user)
                {
                    if ($user['username'] == $_POST['name'] && $user['email'] == $_POST['email'])
                    {
                        $exist++;
                        print json_encode(array('status' => false, 'message' => 'Korisničko ime i email već postoje!'));
                    }
                    if ($user['username'] == $_POST['name'])
                    {
                        $exist++;
                        print json_encode(array('status' => false, 'message' => 'Korisničko ime već postoji!'));
                    }
                    if ($user['email'] == $_POST['email'])
                    {
                        $exist++;
                        print json_encode(array('status' => false, 'message' => 'Email već postoji!'));
                    }
                    /*if ($_POST['userType'] == 'select')
                    {
                        $exist++;
                        print json_encode(array('status' => false, 'message' => 'Niste izabrali tip korisnika!'));
                    }
                    if ($_POST['professionSelect'] == 'selectProfession')
                    {
                        $exist++;
                        print json_encode(array('status' => false, 'message' => 'Niste izabrali profesiju!'));
                    }*/
                }
                if ($exist == 0)
                {
                    print json_encode(array('status' => true));
                }

            }
            else
            {
                print json_encode(array('status' => false, 'message' => 'Niste unijeli dobar email!'));
            }
        }
        else
        {
            print json_encode(array('status' => false, 'message' => 'Popunite prazna polja!'));
        }
    }
}
