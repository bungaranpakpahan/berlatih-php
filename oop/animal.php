<?php 

class Animal
{
    public $nama;
    public function __construct($nama) 
    {
      $this->name = $nama;
      $this->legs = 2;
      $this->cold_blooded = "false";
    }

    public function setLegs($a){
      $this->legs = $a;
    }

}



?>