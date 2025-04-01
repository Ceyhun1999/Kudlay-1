<?php
define('ROOT', dirname(__DIR__));
define('PUBLIC', ROOT . '/public');
define('CORE', ROOT . '/core');
define('APP', ROOT . '/app');

define('CONTROLLERS', APP . '/controllers');
define('VIEWS', APP . '/views');
define('PATH', 'http://localhost/lesson/');

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
require CORE . '/funcs.php';

if ($uri === '') {
    require CONTROLLERS . '/index.php';
} elseif ($uri === 'about') {
    require CONTROLLERS . '/about.php';
} else {
    abort();
}
