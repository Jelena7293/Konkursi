<?php
include_once 'config/loader_models.php';
if (HelperModel::isAjax()==true)
{
    $userModel = new usersModel();
    $users = $userModel->users();
    $exist = 0;

    if (isset($_GET['registration']))
    {
        if ($_POST['first_name']!="" && $_POST['last_name']!="" && $_POST['user_type']!="- - - -" && $_POST['id_profession']!="Izaberite oblast struke" && $_POST['username']!="" && $_POST['password']!="")
        {
            foreach ($users as $user)
            {
                if ($user['username'] == $_POST['username'])
                {
                    $exist++;
                    print json_encode(array('status' => false, 'message' => 'Korisničko ime već postoji!'));
                }
            }
            if ($exist == 0)
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
