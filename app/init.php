<?php
error_reporting(E_ALL);
ini_set("display_errors", 0);
date_default_timezone_set('Europe/Moscow');

//configuration
require_once 'config.php';
//loader
$loader = require_once __DIR__.'/../vendor/autoload.php';
$loader->add('', __DIR__.'/../src');