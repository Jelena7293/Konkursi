<?php
include $_SERVER['DOCUMENT_ROOT'].'/projekat/config/loader.php';
include 'C:/xampp/htdocs/projekat/config/database.php';

class usersModel
{
    public function login($data)
    {
        try {
            if (!empty($data['username']) || !empty($data['password'])) {
                $username = $data['username'];
                $password = $data['password'];


                $sql = "select * from user where username='" . $data['username'] . "' and password='" . $data['password'] . "'";
                $query = database::connection()->prepare($sql);
                $query->execute();
                $result = $query->fetch();

                if ($result)
                {
                    $_SESSION["is_logged"] = "true";
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
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo 'Caught exception: ', $ex->getMessage(), "\n";
        }
    }

    public function loginD($data)
    {
        try
        {
            $sql = "select * from user where username='" . $data['username'] . "' and password='" . $data['password'] . "'";
            $query = database::connection()->prepare($sql);
            $query->execute();
            $result = $query->fetch();
        } catch (Exception $ex) {
            echo 'Caught exception: ', $ex->getMessage(), "\n";
        }
    }

    public function logout()
    {
        try {
            session_unset();
            session_destroy();
            $database = new database();
            $database->disconnect();
            echo "<script type='text/javascript'>window.location='index.php';</script>";
        } catch (Exception $ex) {
            echo 'Caught exception: ', $ex->getMessage(), "\n";
        }
    }

    public function signUp($data)
    {
        try
        {
            //if (!empty($data['firstname']) || !empty($data['lastname']) || !empty($data['userType']) || !empty($data['professionSelect']) || !empty($data['name']) || !empty($data['password'])) {
                //echo "".$data['professionSelect'].", ".$data['userType'].",  ".$data['firstname'].", ".$data['lastname'].", ".$data['name'].", ".$data['password']."";

                $sql = "INSERT INTO user(id_profession, user_type, first_name, last_name, email, username, password, approved)
                            VALUES ('" . $data['professionSelect'] . "', '" . $data['userType'] . "',  '" . $data['firstname'] . "', '" . $data['lastname'] . "', '" . $data['email'] . "', '" . $data['name'] . "', '" . $data['password'] . "', 0)";
                $query = database::connection()->prepare($sql);
                $query->execute();
           // } else {
              /*  echo "nije dobro";
                return false;
            }*/
        } catch (Exception $ex) {
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

        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }
    public function users($id=FALSE)
    {
        try
        {
            if($id!=FALSE)
            {
                //$sql_type = 'SELECT * FROM user, profession WHERE profession.id_profession=user.id_profession ORDER BY last_name';
                $sql_type = "SELECT id_profession FROM user WHERE id_user=".$id;
                $query = database::connection()->prepare($sql_type);
                $query->execute();
                $result_type = $query->fetch();
                if ($result_type['id_profession']==NULL)
                {
                    $sql = "SELECT * FROM user WHERE id_user=".$id;
                }
                else
                {
                    $sql = 'SELECT * FROM user, profession WHERE user.id_user='.$id.'AND profession.id_profession = user.id_profession';
                }
                $query = database::connection()->prepare($sql);
                $query->execute();
                $result=$query->fetch();

                return $result;
            }

        } catch (Exception $ex)
        {
            echo 'Caught exception: ', $ex->getMessage(), "\n";
        }
    }

    public function updateUser($data,$id)
    {
        try
        {
//            $sql="UPDATE sifrarnik_vrste_djelatnosti SET naziv_vrste_djelatnosti=:namee,opis_djelatnosti=:description WHERE idVrste=:id";
//            $query = database::connection()->prepare($sql);
//            $query->execute(array('namee'=>$data['name'],'description'=>$data['description'],':id'=>$id));

//            $sql = "UPDATE user SET id_profession=:professionId, first_name=:name1, last_name=:name2, email=:eMail, username=:userName, password=:passWord WHERE id_user =:id";
            $sql = "UPDATE user SET first_name=:name1, last_name=:name2, email=:eMail, username=:userName, password=:passWord WHERE id_user =:id";
            $query = database::connection()->prepare($sql);
//            $query->execute(array('professionId'=>$data['professionSelect'], 'name1'=>$data['firstname'], 'name2'=>$data['lastname'], 'eMail'=>$data['email'], 'userName'=>$data['name'], 'passWord'=>$data['password'], ':id'=>$id));
            $query->execute(array('name1'=>$data['firstname'], 'name2'=>$data['lastname'], 'eMail'=>$data['email'], 'userName'=>$data['name'], 'passWord'=>$data['password'], ':id'=>$id));
            echo "<script type='text/javascript'>window.location='index.php';</script>";
        }
        catch (Exception $ex)
        {
            echo 'Caught exception: ', $ex->getMessage(), "\n";

        }
    }

//    public function approved()
//    {
//        try
//        {
//            /*$sql_type = 'SELECT * FROM user, profession WHERE profession.id_profession=user.id_profession ORDER BY last_name'*/
//            //$sql = "SELECT * FROM user WHERE approved = '0' ORDER BY last_name";
//            $sql = "SELECT * FROM user, profession WHERE profession.id_profession=user.id_profession AND approved = '0' ORDER BY last_name";
//            $query = database::connection()->prepare($sql);
//            $query->execute();
//            $result = $query->fetchAll();
//            return $result;
//        }
//        catch (Exception $ex)
//        {
//            echo 'Caught exception: ', $ex->getMessage(), "\n";
//        }
//    }

    public function adminInfo()
    {
        try
        {
            $sql = "SELECT * FROM user WHERE user_type='Administrator'";
            $query = database::connection()->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            return $result;
        }
        catch (Exception $ex)
        {
            echo 'Caught exception: ', $ex->getMessage(), "\n";
        }
    }

    public function maxId()
    {
        try
        {
            $sql= "SELECT MAX(id_user) AS max FROM user";
            $query = database::connection()->prepare($sql);
            $query->execute();
            $result = $query->fetch();
            return $result['max'];
        }
        catch (Exception $ex)
        {
            echo 'Caught exception: ', $ex->getMessage(), "\n";
        }
    }

}