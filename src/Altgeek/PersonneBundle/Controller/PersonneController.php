<?php

namespace Altgeek\PersonneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PersonneController extends Controller
{
    public function indexAction()
    {
        return $this->render('AltgeekPersonneBundle:PersonneViews:index.html.twig');
    }
}
