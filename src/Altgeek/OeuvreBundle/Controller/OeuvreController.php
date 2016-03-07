<?php

namespace Altgeek\OeuvreBundle\Controller;

use Altgeek\OeuvreBundle\Entity\Oeuvre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


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

    public function addAction()
    {
        // Création de l'entité
        $oeuvre = new Oeuvre();
        $oeuvre->setTitle('Game of Thrones');
        $oeuvre->setSynopsis('Des boobs, des fesses, des dragons, du sang et des boobs...');

        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // Étape 1 : On « persiste » l'entité
        $em->persist($oeuvre);

        // Étape 2 : On « flush » tout ce qui a été persisté avant
        $em->flush();

        return $this->render('AltgeekOeuvreBundle:OeuvreViews:books.html.twig');
    }

    public function viewAction($id)
    {
        // On récupère le repository
        $repository = $this->getDoctrine()
          ->getManager()
          ->getRepository('AltgeekOeuvreBundle:Oeuvre')
        ;

        // On récupère l'entité correspondante à l'id $id
        $oeuvre = $repository->find($id);

        // $oeuvre est donc une instance de OC\PlatformBundle\Entity\Advert
        // ou null si l'id $id  n'existe pas, d'où ce if :
        if (null === $oeuvre) {
          throw new NotFoundHttpException("L'oeuvre d'id ".$id." n'existe pas.");
        }

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('AltgeekOeuvreBundle:OeuvreViews:books.html.twig', array(
          'oeuvre' => $oeuvre
        ));
    }
}
