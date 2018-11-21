<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 *
 */
class PagesController extends Controller
{


  public function home(RequestInterface $request, ResponseInterface $response)
  {
    $this->container->view->render($response, 'pages/home.twig');
  }

  public function dashboard(RequestInterface $request, ResponseInterface $response)
  {
    $this->container->view->render($response, 'pages/dashboard.twig');
  }
}
