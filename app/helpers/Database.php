<?php
class Database
{
public $dns = "mysql:host=localhost;dbname=sim_manager";
public $user= "admin";
public $password  = "19972008";

    public function __construct()
    {
         $this->connection = new PDO ($this->dns, $this->user,$this->password);
    }
}