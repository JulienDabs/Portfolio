<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("", name="home")
     */
    public function home(): Response
    {
        return $this->render('main/home.html.twig');
    }

    /**
     *@route ("/bio", name="bio", methods={"GET"})
     *
     */
    public function bio()
    {
        return $this->render('main/bio.html.twig');
    }

    /**
     *@route ("/contact", name="contact", methods={"GET"})
     *
     */
    public function contact()
    {
        return $this->render('main/contact.html.twig');
    }

    /**
     *@route ("/lastest", name="lastest", methods={"GET"})
     *
     */
    public function lastest()
    {
        return $this->render('main/lastest.html.twig');
    }
}
