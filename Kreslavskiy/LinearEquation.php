<?php

class A
{
    protected $x;

    public function linearEquation($a, $b)
    {
        if ($a == 0) {
            throw new Exception('Division by zero');
        }
        return $this->x = [(-$b) / $a];
    }
}