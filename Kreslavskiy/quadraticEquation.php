<?php

namespace Kreslavskiy;
use core\EquationInterface;

class quadraticEquation extends LinearEquation implements EquationIntresace{

    protected function discriminant($a, $b, $c){
        return pow($b, 2) - 4 * $a * $c;
    }
    public function quadraticEquation($a, $b, $c){
        if ($a == 0) {
            return $this -> linearEquation($b, $c);
        }
        $d = $this -> discriminant($a, $b, $c);

        if ($d == 0) {
            return $this -> x = [(-$b) / 2 * $a];
        }
        if ($this->d < 0) {
            throw new Exception('It is impossible to solve the quadratic equation');
        }
        return $this -> x = [(-$b - sqrt($this->d)) / (2 * $a), (-$b + sqrt($this->d)) / (2 * $a)];
    }
}