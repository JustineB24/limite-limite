<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\LimiteLimite;

header('Content-Type: application/json; charset=utf-8');

$limiteLimiteController = new LimiteLimite();
echo json_encode($limiteLimiteController->getLimiteLimite(), JSON_UNESCAPED_UNICODE);
