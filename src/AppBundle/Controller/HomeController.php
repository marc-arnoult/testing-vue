<?php
/**
 * Created by PhpStorm.
 * User: marc
 * Date: 19/06/2017
 * Time: 10:44
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/home")
     */
    public function homeAction()
    {
        return new Response('<html><body><h1>Bonjour</h1></body></html>');
    }
}