<?php


class competitionModel
{
    public function competitionList($id=FALSE, $limit_clause = FALSE)
    {
        try
        {
            if($id==FALSE)
            {
                $sql_type="SELECT * FROM competition ORDER BY deadline";
                $query = database::connection()->prepare($sql_type);
                $query->execute();
                $result_type=$query->fetchAll();
            }
            else
            {
                $sql_type="SELECT * FROM competition WHERE id_competition=".$id;
                $query = database::connection()->prepare($sql_type);
                $query->execute();
                $result_type=$query->fetch();
            }
            if($limit_clause!=FALSE)
            {
                $sql_type = "SELECT * FROM competition ORDER BY deadline". $limit_clause;
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