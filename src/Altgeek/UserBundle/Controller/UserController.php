<?php
/* src/Altgeek/UserBundle/Controller/UserController.php */

namespace Altgeek\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('AltgeekUserBundle:UserViews:index.html.twig');
    }
}
