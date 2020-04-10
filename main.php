<?php

require __DIR__.'/vendor/autoload.php';

use models\{
    Food,
    Man,
    Log
};


$man = new Man(new Log());
$apple = new Food([
    'volume'   => 3,
    'name'     => 'Apple'
]);

$man->eat($apple);

