<?php

namespace Cms\WebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Cms\WebSiteBundle\Entity\ini\Initialiser;
use Cms\WebSiteBundle\Controller\InitialisationController;
use Symfony\Component\DependencyInjection\ContainerAware;

class BaseController extends Controller
{
    public function __construct()
    {
    }
}

?>