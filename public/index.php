<?php


require_once __DIR__ . '/../vendor/autoload.php';

$hello = new App\Wcs\Hello();
echo $hello->talk();

use HelloWorld\SayHello;
echo '<br>';
echo SayHello::world();