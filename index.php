<?php

require __DIR__.'/vendor/autoload.php';

use \App\Controller\Pages\Home;

// Renderização da aplicação
echo home::GetHome();