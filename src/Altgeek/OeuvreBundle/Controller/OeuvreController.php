<?php

namespace Altgeek\OeuvreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OeuvreController extends Controller
{
    public function indexAction()
    {
        return $this->render('AltgeekOeuvreBundle:OeuvreViews:index.html.twig');
    }

    public function moviesAction()
    {
        return $this->render('AltgeekOeuvreBundle:OeuvreViews:movies.html.twig');
    }

    public function tvshowsAction()
    {
        return $this->render('AltgeekOeuvreBundle:OeuvreViews:tvshows.html.twig');
    }

    public function booksAction()
    {
        return $this->render('AltgeekOeuvreBundle:OeuvreViews:books.html.twig');
    }

    public function videogamesAction()
    {
        return $this->render('AltgeekOeuvreBundle:OeuvreViews:videogames.html.twig');
    }
}
