<?php


class competitionModel
{
    public function competitionList()
    {
        try
        {
            $sql = "SELECT * FROM competition ORDER BY deadline";
            $query = database::connection()->prepare($sql);
            $query -> execute();
            $result = $query -> fetchAll();

            return $result;
        }
        catch(Exception $ex)
        {
            echo 'Caught exception: ',  $ex->getMessage(), "\n";
        }
    }

    public function studentCompetition()
    {
        try
        {
            $sql = "SELECT * FROM competition WHERE for_user = 'student' ORDER BY deadline";
            $query = database::connection()->prepare($sql);
            $query -> execute();
            $result = $query -> fetchAll();

            return $result;
        }
        catch (Exception $ex)
        {
            echo 'Caught exception: ',  $ex->getMessage(), "\n";
        }
    }

    public function professorCompetition()
    {
        try
        {
            $sql = "SELECT * FROM competition WHERE for_user = 'professor' ORDER BY deadline";
            $query = database::connection()->prepare($sql);
            $query -> execute();
            $result = $query -> fetchAll();

            return $result;
        }
        catch (Exception $ex)
        {
            echo 'Caught exception: ',  $ex->getMessage(), "\n";
        }
    }
}