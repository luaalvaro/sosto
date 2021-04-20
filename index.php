<?php

require __DIR__.'/vendor/autoload.php';

use \App\controller\pages\home;

// Renderização da aplicação
echo home::getHome();