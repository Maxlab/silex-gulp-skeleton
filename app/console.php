#!/usr/bin/env php
<?php
// set to run indefinitely if needed
set_time_limit(0);
require_once 'init.php';

use Symfony\Component\Console\Application;

//сюда добавляем комманды
$app = new Silex\Application();
$config = new \Config();
$config = $config->get();
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'    => 'pdo_mysql',
        'host'      => 'localhost',
        'dbname'    => 'xvideos',
        'user'      => $config['db']['user'],
        'password'  => $config['db']['pass'],
        'charset'   => 'utf8',
    )
));

$application = new Application();
$application->add(new \MyCommand\InstallDBCommand($app));
$application->add(new \MyCommand\UpdateDBCommand($app));
$application->add(new \MyCommand\CreateDBForSiteCommand($app));
$application->add(new \MyCommand\InsertKeywDBCommand($app));
$application->run();