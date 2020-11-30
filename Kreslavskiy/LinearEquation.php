<?php

namespace Kreslavskiy;

class LinearEquation
{
    protected $x;

    public function linearEquation($a, $b)
    {
        if ($a == 0) {
            throw new KreslavskiyException('Division by zero');
        }

        MyLog::log("It is a linear equation.\n\r");
        return $this->x = [(-$b) / $a];
    }
}
