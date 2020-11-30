<?php

ini_set("display_errors", 1);
error_reporting(-1);

require "core/EquationInterface.php";
require "core/LogAbstract.php";
require "core/LogInterface.php";

require "Kreslavskiy/MyLog.php";
require "Kreslavskiy/LinearEquation.php";
require "Kreslavskiy/QuadraticEquation.php";
require "Kreslavskiy/KreslavskiyException.php";

$solver = new Kreslavskiy\QuadraticEquation();
$logger = Kreslavskiy\MyLog::Instance();

try {
    echo "Enter 3 numbers: a, b, c.\n\r";

    $a = readline("Enter a: \n\r");
    $b = readline("Enter b: \n\r");
    $c = readline("Enter c: \n\r");

    $logger::log("Equation is "."x=".$a."x2+".$b."x+".$c."\n\r");

    $result = $solver->solve($a, $b, $c);
    $str = implode("; ", $result);

    $logger::log("Equation roots: ".$str."\n\r");
} catch (Kreslavskiy\KreslavskiyException $err) {
    $message = $err->getMessage();
    $logger::log($message);
}

Kreslavskiy\MyLog::write();