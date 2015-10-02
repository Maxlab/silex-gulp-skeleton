<?php
require_once 'init.php';

//register
$app = new Silex\Application();

$app['debug'] = false;

// monolog
/*$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.name' => 'dev',
  'monolog.level' => 100,
  'monolog.logfile' => __DIR__ . '/cache/dev.log',
));*/

$app->register(new Silex\Provider\HttpCacheServiceProvider(), array(
  'http_cache.cache_dir' => __DIR__.'/cache/',
));
$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../src/views',
));

//web_debuger
if($app['debug']) {
  $app->register(new \Silex\Provider\WebProfilerServiceProvider(), array(
    'profiler.cache_dir' =>  __DIR__.'/../app/cache/profiler',
    'profiler.mount_prefix' => '/_profiler', // this is the default
  ));
}

// Route
$app->get('/', function() use ($app) {
    $ob = new Controller\BaseController($app);
    return $ob->index();
})
->bind('index');


return $app;
