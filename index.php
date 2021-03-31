<?php

ini_set("display_errors", 1);
error_reporting(-1);

require_once __DIR__ . "/vendor/autoload.php";

$solver = new Kreslavskiy\QuadraticEquation();

try {
    Kreslavskiy\MyLog::log("Version: " . trim(file_get_contents("version")) . "\n");
    echo "Enter 3 numbers: a, b, c.\n\r";

    $a = readline("Enter a: \n\r");
    $b = readline("Enter b: \n\r");
    $c = readline("Enter c: \n\r");

    Kreslavskiy\MyLog::log("Equation is "."x=".$a."x2+".$b."x+".$c."\n\r");
	
	if ($a === 0) {
		Kreslavskiy\MyLog::log("It is a linear equation.\n\r");
	} else {
		Kreslavskiy\MyLog::log("It is a quad equation.\n\r");
	}

    $result = $solver->solve($a, $b, $c);
    $str = implode("; ", $result);

    Kreslavskiy\MyLog::log("Equation roots: ".$str."\n\r");
} catch (Kreslavskiy\KreslavskiyException $err) {
    $message = $err->getMessage();
    Kreslavskiy\MyLog::log($message);
}

Kreslavskiy\MyLog::write();
