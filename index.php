<?php

// Arquivo responsável pelo gerenciamento das rotas
require './_settings/classes/router.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'index';

echo Router::handleRouter($page);