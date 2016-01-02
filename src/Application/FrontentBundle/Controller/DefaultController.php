<?php

namespace Application\FrontentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function homeAction()
    {
        $template = ':default:home.html.twig';
        $section = 'home';

        return $this->render($template, array('section' => $section));
    }

    /**
     * @Route("/about")
     */
    public function aboutAction()
    {
        $template = ':default:about.html.twig';
        $section = 'about';

        return $this->render($template, array('section' => $section));
    }
}
