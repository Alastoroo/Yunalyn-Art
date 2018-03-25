<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SliderController extends Controller
{
    /**
     * @Route("/slider", name="slider")
     */
    public function sliderAction()
    {
        // replace this example code with whatever you need
        return $this->render('slider/slider.html.twig');
    }
}
