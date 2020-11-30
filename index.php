<?php
class A{

}

class B extends A{
    public function __construct($a1, $a2, $a3, $a4){
        $this->a1 = $a1;
        $this->a2 = $a2;
        $this->a3 = $a3;
        $this->a4 = $a4;
    }

    protected $a1, $a2, $a3, $a4;
}

$a1 = new A();
$a2 = new A();
$a3 = new A();
$a4 = new A();
$b = new B($a1, $a2, $a3, $a4);