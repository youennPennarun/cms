<?php
	namespace Cms\WebSiteBundle\Controller;
	 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	use Cms\WebSiteBundle\Entity\Error;
	 
	class AdminController extends BaseController 
	{
		public function testPageAction(){
			
			$this->getAllRoutes();
			
		return $this->render('CmsWebSiteBundle:WebSite:default/pages/pageNoFound.html.twig',array("url"=>"bla"));
		}
		
		private function test404($path){
			$startTime = time();
			$file = $path;
			$handle = curl_init($path);
			curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

			/* Get the HTML or whatever is linked in $url. */
			$response = curl_exec($handle);

			/* Check for 404 (file not found). */
			$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
			echo $path;
			if($httpCode == 404) {
				echo "<br>404!!";
			}else{
				echo "<br>Exist";
			}	
			echo "  in ".(time()-$startTime);
			curl_close($handle);

		}
		private function getAllRoutes(){
			$startTime = $current = time();
			
			set_time_limit(300);
		   /** @var $router \Symfony\Component\Routing\Router */
			$router = $this->container->get('router');
			/** @var $collection \Symfony\Component\Routing\RouteCollection */
			$collection = $router->getRouteCollection();
			$allRoutes = $collection->all();
			$baseurl = $this->getRequest()->getScheme() . '://' . $this->getRequest()->getHttpHost() . $this->getRequest()->getBasePath();
			echo $baseurl."<br>";
			$routes = array();
			/** @var $params \Symfony\Component\Routing\Route */
			foreach ($allRoutes as $route => $params)
			{
				
				echo "<br>".$route."  ->  ";
				$this->url_validate($baseurl.$params->getPath());
				echo "<br>";
				echo "runned in : ".($current = time()-$current);
				echo "<br>";
			}
				echo "<br>PROUT  ->  ";
				$this->url_validate($baseurl."/hgtrfdc");
				echo "<br>";
				echo "<br>";
				echo "<br>total time in : ".(time()-$startTime);
		set_time_limit(30);
		
		}
		
		private function url_validate($link){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    $data = curl_exec($ch);
    curl_close($ch);
    preg_match_all("/HTTP\/1\.[1|0]\s(\d{3})/",$data,$matches);

    $code = end($matches[1]);

    if(!$data) 
    {
        return(false);
    } 
    else 
    {
        if($code==200) 
        {
				echo "<br>Exist";
            return(true);
        } 
        elseif($code==404) 
        {
				echo "<br>404!!!";
            return(false);
        }
    }
}
		
		
		
		
		
		
		
		
		
	}
?>