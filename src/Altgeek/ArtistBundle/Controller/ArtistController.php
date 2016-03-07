<?php
/* src/Altgeek/ArtistBundle/Controller/ArtistController.php */

namespace Altgeek\ArtistBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArtistController extends Controller
{
    public function indexAction()
    {
        return $this->render('AltgeekArtistBundle:ArtistViews:index.html.twig');
    }
}
