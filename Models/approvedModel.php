<?php


class approvedModel
{

    public function approved()
    {
        try
        {
            /*$sql_type = 'SELECT * FROM user, profession WHERE profession.id_profession=user.id_profession ORDER BY last_name'*/
            //$sql = "SELECT * FROM user WHERE approved = '0' ORDER BY last_name";
            $sql = "SELECT * FROM user, profession WHERE profession.id_profession=user.id_profession AND approved = '0' ORDER BY last_name";
            $query = database::connection()->prepare($sql);
            $query->execute();
            $result = $query->fetchAll();
            return $result;
        }
        catch (Exception $ex)
        {
            echo 'Caught exception: ', $ex->getMessage(), "\n";
        }
    }

    public function getUserForApproved($id)
    {
        try
        {
            $sql = "SELECT * FROM user, profession WHERE profession.id_profession=user.id_profession AND id_user =".$id;
            //$sql = "SELECT * FROM user WHERE id_user =" . $id;
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

    public function updateApproved($id)
    {
        try
        {
//            $sql = "UPDATE user SET approved = 1 WHERE id_user =:id";
//            $query = database::connection()->prepare($sql);
//            $query->execute(array('1'=>$data['approved'], ':id'=>$data['id']));
            $sql = "UPDATE user SET approved = 1 WHERE id_user =:id";
            $query = database::connection()->prepare($sql);
            $query->execute(array(':id'=>$id));
            echo "<script type='text/javascript'>window.location='index.php';</script>";
        }
        catch (Exception $ex)
        {
            echo 'Caught exception: ', $ex->getMessage(), "\n";

        }
    }

}