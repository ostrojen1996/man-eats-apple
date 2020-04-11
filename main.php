<?php

require __DIR__.'/vendor/autoload.php';

use models\{
    Apple,
    Man
};


$man = new Man();
$apple = new Apple();

$man->eat($apple);

