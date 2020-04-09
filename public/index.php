<?php

require_once '../vendor/autoload.php';

$hello = new \App\Wcs\Hello();

echo $hello->talk() . "<br>";
echo \HelloWorld\SayHello::world();