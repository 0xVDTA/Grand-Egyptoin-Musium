<?php

require_once dirname(__DIR__) . '/app/config/config.php';

$router = require APP_PATH . '/routes.php';

$router->dispatch($_SERVER['REQUEST_URI'] ?? '/', $_SERVER['REQUEST_METHOD'] ?? 'GET');

