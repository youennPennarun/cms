<?php
namespace Cms\WebSiteBundle\EventListener;

	use Cms\WebSiteBundle\Controller\preControllerController;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use \Symfony\Component\HttpKernel\Event\GetResponseEvent;use Symfony\Component\Process\PhpProcess;



class EventListener extends Controller
{
    protected $container;

	 public function __construct(ContainerInterface $container) // this is @service_container
    {
        $this->container = $container;
    }
    public function onKernelController(FilterControllerEvent $event)
    {
        $controller = $event->getController();
        /*
         * $controller passed can be either a class or a Closure. This is not usual in Symfony2 but it may happen.
         * If it is a class, it comes in array format
         */
        if (!is_array($controller)) {
            return;
        }
		
		$request = $this->container->get('request');
		$routeName = $request->get('_route');
		if($routeName == "")
			return;
		echo "<h1>".$routeName."</h1>";
		if($this->container->getParameter('initialised') != 'true'){
			$routeRedir = "ini-settings";
			$exceptionsRoutes = array("ini-settings","ini-settings-createDB","ini-settings-admin","ini-cache");
			$redirectUrl = $this->container->get('router')->generate($routeRedir);
			
			foreach($exceptionsRoutes as $route){
				if($route == $routeName)
					return;
			}
			if($routeRedir == $routeName)
					return;
			
			$event->setController(
				function() use ($redirectUrl) 
				{
					return new RedirectResponse($redirectUrl);
				});
			
		}
    }
	
	
}

?>