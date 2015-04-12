<?php

namespace Qcm\QcmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QcmQcmBundle:Default:index.html.twig');
    }
}
