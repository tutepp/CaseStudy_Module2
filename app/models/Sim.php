<?php

class Sim {
    public $PhoneNumber;
    public $Network;
    public $Price;
    public $Center;
    public $Type;

    public function __construct($PhoneNumber,$Network,$Price,$Center,$Type)
    {
        $this->PhoneNumber = $PhoneNumber;
        $this->Network = $Network;
        $this->Price = $Price;
        $this->Center = $Center;
        $this->Type= $Type;
    }
}