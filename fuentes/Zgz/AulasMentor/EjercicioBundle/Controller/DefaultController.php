<?php

namespace Zgz\AulasMentor\EjercicioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZgzAulasMentorEjercicioBundle:Default:index.html.twig', array('name' => $name));
    }

    public function indexpruebasAction()
    {
        return ("<html><body><h1>texto</h1></body></html>");
    }
}
