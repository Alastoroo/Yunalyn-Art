<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoaderController extends Controller
{
    /**
     * @Route("/loader", name="loader")
     */
    public function loaderAction()
    {
        // replace this example code with whatever you need
        return $this->render('Loader/loader.html.twig');
    }
}
