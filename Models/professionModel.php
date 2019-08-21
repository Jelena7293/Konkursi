<?php


class professionModel
{
    public function typeProfession($id=FALSE, $limit_clause = FALSE)
    {
        try
        {
            if($id==FALSE)
            {
                $sql_type="SELECT * FROM profession ORDER BY profession_name";
                $query = database::connection()->prepare($sql_type);
                $query->execute();
                $result_type=$query->fetchAll();
            }
            else
            {
                $sql_type="SELECT * FROM profession WHERE id_profession=".$id;
                $query = database::connection()->prepare($sql_type);
                $query->execute();
                $result_type=$query->fetch();
            }
            if($limit_clause!=FALSE)
            {
                $sql_type = "SELECT * FROM profession ORDER BY profession_name". $limit_clause;
                $query = database::connection()->prepare($sql_type);
                $query->execute();
                $result_type=$query->fetchAll();
            }
            return $result_type;
        }
        catch(Exception $e)
        {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}