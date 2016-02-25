<?php

namespace Altgeek\OeuvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OeuvreController extends Controller
{
    public function indexAction()
    {
        return $this->render('AltgeekOeuvreBundle:OeuvreViews:index.html.twig');
    }
}
