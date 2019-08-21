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
                    $_SESSION["approved"] = $result['approved'];

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
            session_unset();
            session_destroy();
            $database = new database();
            $database->disconnect();
            //header('Location:index.php');
            //echo "<script type='text/javascript'>window.location='index.php?view=members'; alert('Brisanje je uspjesno izvrseno'); ;</script>";
            echo "<script type='text/javascript'>window.location='index.php';</script>";
        }
        catch (Exception $ex)
        {
            echo 'Caught exception: ', $ex->getMessage(), "\n";
        }
    }

    public function signUp($data)
    {
        try
        {
            if (!empty($data['firstname']) || !empty($data['lastname']) || !empty($data['userType']) || !empty($data['professionSelect']) || !empty($data['name']) || !empty($data['password']))
            {
                //echo "".$data['professionSelect'].", ".$data['userType'].",  ".$data['firstname'].", ".$data['lastname'].", ".$data['name'].", ".$data['password']."";
                $sql= "INSERT INTO user(id_profession, user_type, first_name, last_name, username, password, approved)
                            VALUES ('".$data['professionSelect']."', '".$data['userType']."',  '".$data['firstname']."', '".$data['lastname']."', '".$data['name']."', '".$data['password']."', 0)";
                $query = database::connection()->prepare($sql);
                $query->execute();
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

    public function usersList()
    {
        try
        {
            //$sql_type = "SELECT * FROM user ORDER BY last_name";
            $sql_type = 'SELECT * FROM user, profession WHERE profession.id_profession=user.id_profession ORDER BY last_name';

            $query = database::connection()->prepare($sql_type);
            $query->execute();
            $result_type = $query->fetchAll();

            return $result_type;
        }
        catch(Exception $e)
        {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }




    //-----------------------------------------------------------------------------------------


    public function users($id=FALSE,$limit_clause=FALSE,$reg=FALSE)
    {
        try
        {
            if($id!=FALSE)
            {
                $sql_type="SELECT id_profession FROM user WHERE id_user=".$id;
                $query = database::connection()->prepare($sql_type);
                $query->execute();
                $result_type = $query->fetch();
                if($result_type['id_profession']==NULL)
                {
                    $sql="SELECT * FROM user WHERE id_user=".$id;
                }
                else
                {
                    $sql = 'SELECT * FROM user, profession WHERE user.id_user='.$id .' AND  profession.id_profession = user.id_profession';
                }
                $query = database::connection()->prepare($sql);
                $query->execute();
                $result=$query->fetch();
            }
            return $result;
        }
        catch(Exception $e)
        {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    public function addUser($data)
    {
        try
        {
            //$pswd=password_hash($data['password'],PASSWORD_DEFAULT);
            $sql="INSERT INTO users(id_profession, user_type, first_name, last_name, username, password) VALUES ('".$data['professionSelect']."', '".$data['userType']."', '".$data['firstname']."', '".$data['lastname']."', '".$data['username']."', '".$data['password']."')";
            $query = database::connection()->prepare($sql);
            $query->execute();
        }
        catch(Exception $e)
        {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}