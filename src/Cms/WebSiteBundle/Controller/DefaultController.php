<?php

namespace Cms\WebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends BaseController 
{
    public function indexAction($name)
    {
        return $this->render('CmsWebSiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
