<?php

class Model
{
    private $host = "localhost";
    private $dbname = "mvc";
    private $username = "amir";
    private $password = "1234";
    public static $con;
    public function __construct()
    {
        try {
            self::$con = new PDO("mysql:dbname=$this->dbname;host=$this->host", $this->username, $this->password);
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    public function doSql($query, $data = [])
    {
        $sql = self::$con->prepare($query);
        foreach ($data as $key => $value) {
            $sql->bindValue($key + 1, $value);
        }
        $sql->execute();
    }
    public function doSelect($query, $data = [], $flag = '')
    {
        $sql = self::$con->prepare($query);
        foreach ($data as $key => $value) {
            $sql->bindValue($key + 1, $value);
        }
        $sql->execute();
        if ($flag == '') {
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return $sql->fetch(PDO::FETCH_ASSOC);
        }
    }
}
