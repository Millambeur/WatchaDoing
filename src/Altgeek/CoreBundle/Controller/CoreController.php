<?php

namespace Altgeek\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('AltgeekCoreBundle:Core:index.html.twig');
    }
}