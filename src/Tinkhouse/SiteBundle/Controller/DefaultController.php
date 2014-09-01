<?php

namespace Tinkhouse\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteBundle:Dashboard:dashboard.html.twig');
    }

    public function houseAction()
    {
        return $this->render('SiteBundle:House:house.html.twig');
    }

}
