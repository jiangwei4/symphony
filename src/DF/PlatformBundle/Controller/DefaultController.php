<?php

namespace DF\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DFPlatformBundle:Default:index.html.twig');
    }
}
