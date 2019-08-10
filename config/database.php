<?php


class database
{
    public static $servername = "127.0.0.1";
    public static $username = "root";
    public static $password = "";
    public static $dbname = "projekat";
    public static $conn;

    public static function connection()
    {
        try
        {
            if (self::$conn==null)
            {
                self::$conn = new PDO("mysql:host=".self::$servername.";dbname=".self::$dbname, self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }
            return self::$conn;
        }
        catch (PDOException $e)
        {
            throw new Exception($e->getMessage());
        }
    }

    public function disconnect()
    {
        try
        {
            self::$conn==null;
        }
        catch (PDOException $e)
        {
            throw new Exception($e->getMessage());
        }
    }
}