<?php

namespace UrenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ContactController extends Controller
{
    /**
     * @Route("/contact")
     */
    public function indexAction()
    {
        return $this->render('UrenBundle:Contact:contact.html.twig');
    }
}
