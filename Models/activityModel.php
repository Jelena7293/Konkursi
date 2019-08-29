<?php


class activityModel
{
    public function typeActivity($id=FALSE)
    {
        try
        {
            if ($id == FALSE)
            {
                $sql = "SELECT * FROM profession ORDER BY profession_name";
                $query = database::connection()->prepare($sql);
                $query->execute();
                $result=$query->fetchAll();
            }
            else
            {
                $sql = "SELECT * FROM profession WHERE id_profession =".$id;
                $query = database::connection()->prepare($sql);
                $query->execute();
                $result = $query->fetch();
            }
        }
        catch (Exception $ex)
        {
            echo 'Caught exception: ', $ex->getMessage(), "\n";
        }
    }


}