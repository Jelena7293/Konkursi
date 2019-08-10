<?php
include $_SERVER['DOCUMENT_ROOT'].'/projekat/config/loader.php';
include 'config/database.php';

class usersModel
{
    public function login($data)
    {
        try
        {
            if (!empty($data['username']) || !empty($data['password']))
            {
                $username = $data['username'];
                $password = $data['password'];

                //$sql = "SELECT * FROM user WHERE username=:username";
                $sql="select * from user where username='".$data['username']."' and password='".$data['password']."'";
                $query = database::connection()->prepare($sql);
                $query->execute();
                $result = $query->fetch();

                if ($result)
                {
                    $_SESSION["is_logged"] ="true";
                    $_SESSION["id"] = $result['id_user'];
                    $_SESSION["id_profession"] = $result['id_profession'];
                    $_SESSION["user_type"] = $result['user_type'];
                    $_SESSION["first_name"] = $result['first_name'];
                    $_SESSION["last_name"] = $result['last_name'];
                    $_SESSION["username"] = $result['username'];
                    $_SESSION["password"] = $result['password'];

                    /*$sql = "SELECT * FROM profession WHERE id_profession=:id";
                    $query =database::connection()->prepare($sql);
                    $query->execute(array(':id'=>$_SESSION['id_profession']));
                    $result_profession = $query->fetch();
                    $_SESSION['profession_name'] = $result_profession['profession_name'];*/

                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        catch (Exception $ex)
        {
            echo 'Caught exception: ', $ex->getMessage(), "\n";
        }
    }

    public function logout()
    {
        try
        {
            session_destroy();
            $database = new database();
            $database->disconnect();
        }
        catch (Exception $ex)
        {
            echo 'Caught exception: ', $ex->getMessage(), "\n";
        }
    }
}