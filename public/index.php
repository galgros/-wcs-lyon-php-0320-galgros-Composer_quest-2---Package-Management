<?php

require_once '../vendor/autoload.php';

$hello = new \App\Wcs\Hello();
$sayHello = new \HelloWorld\SayHello();

echo $hello->talk() . "<br>";
echo $sayHello->world();