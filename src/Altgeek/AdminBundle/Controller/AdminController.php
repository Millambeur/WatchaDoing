<?php

namespace Altgeek\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('AltgeekAdminBundle:AdminViews:index.html.twig');
    }
}
