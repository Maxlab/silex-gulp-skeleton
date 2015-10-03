<?php
namespace Controller;

use Symfony\Component\HttpFoundation\Response;
use FireDog\FB;

class BaseController
{
  private $app;

  public function __construct($app){
    $this->app = $app;
  }

  public function index()
  {
    FB::info('We are champions, my friends!');
    return new Response($this->app['twig']->render('sceleton.twig'));
  }

}
