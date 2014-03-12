<?php

namespace uos\uosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('uosuosBundle:Default:index.html.twig', array('name' => $name));
    }
}
