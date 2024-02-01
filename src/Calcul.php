<?php

Namespace App;
class Calcul
{
    public function __construct( private $a, private $b){}

    public function som()
    {
        return $this->a + $this->b;
    }
    public function prod()
    {
        return $this->a * $this->b;
    }
}
?>