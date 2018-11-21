<?php

use Psr\Http\Message\ResponseInterface;
/**
 *
 */
class Controller
{

  function __construct($container)
  {
    $this->container = $container;
  }

  private $container;

  function __construct($container)
  {
    $this->container = $container;
  }

  public function render (ResponseInterface $response, $file){
    $this->container->view->render($response, $file);
  }
}
