<?php

namespace UrenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LoginController extends Controller
{
    /**
     * @Route("/login")
     */
    public function indexAction()
    {
        return $this->render('UrenBundle:Login:login.html.twig');
    }
}
