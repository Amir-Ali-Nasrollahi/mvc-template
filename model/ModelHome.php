<?php

class ModelHome extends Model 
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertFormData() {
        $sql = "INSERT INTO form() values(?,?,?)";
        $this->doSql($sql);
    }
}