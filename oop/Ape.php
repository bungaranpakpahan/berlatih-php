<?php 

class Ape extends Animal{
    public $up = 'auoo';

    function yell()
    {
        echo $this->up;
        echo $this->legs;
    }
}



?>