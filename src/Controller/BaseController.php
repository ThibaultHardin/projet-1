<?php
/**
 * Created by PhpStorm.
 * User: Thibault
 * Date: 02/12/2017
 * Time: 18:24
 */

namespace App\Controller;

use Symfony\Flex\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BaseController extends Controller
{
     /**
      * @Route("/")
      */
    public function indexAction()
    {
        return $this->render('index.html.twig');
    }
}