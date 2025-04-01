<?php
define("ROOT", dirname(__DIR__));
define('PUBLIC', ROOT . '/public');
define('CORE', ROOT . '/core');
define('APP', ROOT . '/app');

define('CONTROLLERS', APP . '/controllers');
define('VIEWS', APP . '/views');
define('PATH', 'http://localhost/lesson/task/');


require CORE . '/funcs.php';
require CONTROLLERS . '/index.php';
