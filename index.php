<?php
class A
{
    public $x;

    public function LinearEquation($a, $b){
        if ($a == 0) {
            throw new Exception('Division by zero');
        }
        return $this -> $x = (-$b) / $a;
    }
}

class B extends A{
    public function Discriminant($a, $b, $c){
        return $this -> d = pow($b, 2) - 4 * $a * $c;
    }
    public function QuadraticEquation($a, $b, $c){
        if ($a == 0) {
            return $this -> LinearEquation($a, $b);
        }
        $d = $this -> Discriminant($a, $b, $c);

        if ($d == 0) {
            return $this -> x = [(-$b) / 2 * $a];
        }
        if ($d < 0) {
            throw new Exception('It is impossible to solve the quadratic equation');
        }
        return $this -> x = [(-$b - sqrt($d)) / 2 * $a, (-$b + sqrt($d)) / 2 * $a];
    }
}

$a = new A();
$b = new B($a);

$linearResult = var_dump($a->solveLinearEquation(3, -4));
$quadResult = var_dump($b->QuadraticEquation(3, -4, 4));
$res = var_dump($b->QuadraticEquation(0, -4, 7));

echo $linearResult;
echo $quadResult;
echo $res;


