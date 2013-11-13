<?php
	namespace Cms\WebSiteBundle\Controller;
	 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	use Cms\WebSiteBundle\Entity\Uploader;
	use Cms\WebSiteBundle\Entity\Template;
	use Cms\WebSiteBundle\Entity\Page;
	use Cms\WebSiteBundle\Entity\Text;
	use Cms\WebSiteBundle\Entity\managers\TemplateManager;
	 
	class TemplatesController extends Controller
	{
		public function getTemplateAction(Request $request)
		{
			$session = $this->getRequest()->getSession();
			$session->remove("template-tmp");
			$uploader = new Uploader;
			
			$form = $this->createFormBuilder($uploader)
				->add('name','text')
				->add("file","file")
				->add("submit","submit")
				->getForm();
			
			$form->handleRequest($request);
			if ($form->isValid()) {
				$data = $form->getData();	// get all the inputs
				$rep = $this->getDoctrine()
							->getRepository('CmsWebSiteBundle:Template');
				$t=array();
				$t = $rep->findOneBy(array("name"=>$uploader->getName()));
				if($t == null){
					$uploader->uploadTemplate();
					
					$template = new Template;
					$template->setPath($uploader->getAbsolutePath());
					$template->setName($uploader->getName());
					$session->set("template-tmp",$template);
					return $this->redirect($this->generateUrl('Settings-initTemplate'));
				}else{
					 $this->get('session')->getFlashBag()->add(
						'error',
						'This template name already exist'
					);
					$form = $this->createFormBuilder($data)
						->add('name','text')
						->add("file","file")
						->add("submit","submit")
						->getForm();
				}
			}	
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/templates/templateSettings.html.twig',
				array("form" => $form->createView(), "path"=>__DIR__));
		}
		
		public function initTemplateAction(Request $request)
		{
			$session = $this->getRequest()->getSession();	// get the session
			$template = $session->get("template-tmp");	//get the selected template
			if($session->get("template-tmp") == ""){	// if there is no one
				return $this->redirect($this->generateUrl('Settings-GetTemplate'));	//user is redirected in the template selection page
			}
			
			$analyse = $template->analyseFile();
			$assets = $analyse["assets"];
			$variables = $analyse["variable"];
			$images = $analyse["images"];
			$assetsFileArray=array();
			$imagesFileArray = array();
			$imagesIsVar = array();
			if(count($assets) > 0)
				$assetsFileArray = array_fill(0, count($assets), NULL);	//ini the assets files array
			if(count($images) > 0){
				$imagesFileArray = array_fill(0, count($images), NULL);	//ini the image files array
				$imagesIsVar = array_fill(0, count($images), NULL);		//ini the checkboxes array
			}
			//$template->setAssetsFiles($assetsArray); 
			$imgPath = array();
			foreach($images as $img){
				$imgPath[] = $img["src"];
			}
			$defaultData = array(
							"name"=>$template->getName(),
							"assets" => $assets,
							"assetsFiles" => $assetsFileArray,
							"images" => $imgPath,
							"imagesFiles" => $imagesFileArray,
							"imagesIsVar" => $imagesIsVar,
							"variable"=>$variables
						);
			
			$form = $this->createFormBuilder($defaultData)
				->add('name','text')
				->add('assets', 'collection', array(
						'type'   => 'text',
						'label'  =>  'Assets : '))
				->add('assetsFiles', 'collection', array(
						'type'   => 'file',
						'label'  =>  'Assets : '))
				->add('images', 'collection', array(
						'type'   => 'text',
						'label'  =>  'Images : '))
				->add('imagesFiles', 'collection', array(
						'type'   => 'file',
						'options'  => array(
							'required'  => false
						)))
				->add('imagesIsVar', 'collection', array(
						'type'   => 'checkbox',
						'label'  =>  'Is variable : ',
						'options'  => array(
							'required'  => false
						)))
				->add('variable', 'collection', array(
						'type'   => 'text',
						'label'  =>  'Variables : '))
				->add("submit","submit")
				->getForm();
			
			
			$form->handleRequest($request);
			if ($form->isValid()) {
				$data = $form->getData();	// get all the inputs
				$i = 0;		
				$o = 0;
				$error = 0;
				$toUpload = array();
				$variable = array();
				$imgToReplace = array();
				foreach($data["variable"] as $var){	// for each text variable in the file
					$variable[$var] = array("type" =>"text");		// $var is 'text' type
					unset($v);
				}
				foreach($images as $image){	// for each images
					if($data["imagesIsVar"][$i]== 1){	// if it's not a static image
						if(isset($image["id"])){
							$id= $image["id"];
						}else{
							$id = "";
						}
						if(isset($image["class"])){
							$class= $image["class"];
						}else{
							$class= "";
						}
						if(isset($image["height"])){
							$height= $image["height"];
						}else{
							$height= 100;
						}
						if(isset($image["width"])){
							$width= $image["width"];
						}else{
							$width= 100;
						}
						$variable["img".$o] = array( 	"type" => "image",
														"options" => array(
															"width" => $width,
															"height" => $height,
															"id" => $id,
															"class" => $class
														)
													);	// add in the variable array a new variable with an 'image' type
						
						array_push($imgToReplace,$image["src"]);	
						unset($v);
						$o++;
					}else{	// if it's a static image
						if($data["imagesFiles"][$i] == null){	// if there is no file
							$error = 1;		// there is an error
						}else{
							array_push($toUpload,$i);	// the file have to be uploaded
						}
					}
					$i++;
				}
				if($error == 1 ){
					echo "<br><h3>Errors</h3><br>";
				}else{	// if all the data are correct
					/*----- Initialise template data -----*/
					$template->setName($data["name"]);	
					$template->setAssetsString($data["assets"]);
					$linesToBeReplaced = array();
					foreach($toUpload as $imageId){
						//linesToBeReplaced[$imageToUpload
						array_push($data["assets"],$data["images"][$imageId]);
						array_push($data["assetsFiles"],$data["imagesFiles"][$imageId]);
					}
					//------------------------------------------
					$uploader = new Uploader;	//prepare the up-loader object
					$i = 0;
					$cssFilesPath = array();
					foreach($data["assets"] as $asset){	//for each assets
						
						$tmp = explode("/",$asset);
						$name = $tmp[count($tmp)-1];
						$tmp = $uploader->uploadAssets($data["assetsFiles"][$i],$name,$template->getName());
						$linesToBeReplaced[$asset] = "{{ asset('../".$tmp."') }}";
						if(explode(".",$name)[count(explode(".",$name))-1] == "css"){
							array_push($cssFilesPath,"/".$tmp);
						}
						unset($data["assetsFiles"][$i]);
						unset($tmp);
						$i++;
					}
					$session->set("cssToAnalyse",$cssFilesPath);
					unset($data["assetsFiles"]);
					$template->toDBPreparation($variable);	//set files informations needed for the database
					
					//------------------------------------------
					
					$template->editFile($linesToBeReplaced,$imgToReplace);
					$em = $this->getDoctrine()->getManager();
					$em->persist($template);
					$em->flush();
					return $this->redirect($this->generateUrl('Settings-otherAssetsUpload'));
				}
			}
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/templates/templateSettings.html.twig',
				array("form"=>$form->createView()));
		}
		
		public function otherAssetsUploadAction(Request $request){
			$session = $this->getRequest()->getSession();	// get the session
			$template = $session->get("template-tmp");	//get the selected template
			if($session->get("template-tmp") == ""){	// if there is no one
				return $this->redirect($this->generateUrl('Settings-GetTemplate'));	//user is redirected in the template selection page
			}
			$cssPathList = $session->get("cssToAnalyse");
			$toUpload = array();
			$i = 0;
			foreach($cssPathList as $cssPath){
				$toUpload[$i] = $template->analyseCss($cssPath);
				$i++;
			}
			$i = 0;
			$imgList=array();
			$imgFileList=array();
			foreach($cssPathList as $cssPath){
					foreach($toUpload[$i] as $o){
						array_push($imgList,$o);
						array_push($imgFileList,null);
					}
				$i++;
			}
			$defaultData = array(
							"images" => $imgList,
							"imagesFiles" => $imgFileList
						);
			
			$form = $this->createFormBuilder($defaultData)
				->add('images', 'collection', array(
						'type'   => 'text',
						'label'  =>  'Images : '))
				->add('imagesFiles', 'collection', array(
						'type'   => 'file',
						'options'  => array(
							'required'  => true
						)))
				->add("submit","submit")
				->getForm();
			
			$form->handleRequest($request);
			if ($form->isValid()) {
				$data = $form->getData();	// get all the inputs
				$uploader = new Uploader();
				$i=0;
				foreach($data["images"] as $asset){	//for each assets
						$tmp = explode("/",$asset);
						$name = $tmp[count($tmp)-1];
						$linesToBeReplaced[$asset] = $this->container->getParameter('base-path')."/".$uploader->uploadAssets($data["imagesFiles"][$i],$name,$template->getName());
						if(explode(".",$name)[count(explode(".",$name))-1] == "css"){
							array_push($cssFilesPath,"/".$tmp);
						}
						unset($data["imagesFiles"][$i]);
						unset($tmp);
						$i++;
					}
				unset($data["imagesFiles"]);
					
					//------------------------------------------
				foreach($cssPathList as $cssPath){
					$template->editCss($cssPath,$linesToBeReplaced);
				}
					
				$session->remove("cssToAnalyse");
				$session->remove("template-tmp");
			}
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/templates/templateSettings.html.twig',
				array("form"=>$form->createView()));
		}
		
		
		
		
		public function selectTemplateAction(Request $request)
		{
			$repo = $this->getDoctrine()
					->getRepository('CmsWebSiteBundle:Template');
			$template = array();
			$template = $repo->findAll();
			if(count($template) > 0){
				$checkBoxList = array_fill(0,count($template),null);
			}else{
				$checkBoxList = null;
			}
			$defaultData = array("checkBox"=>$checkBoxList);
			$form = $this->createFormBuilder($defaultData)
				->add('checkBox', 'collection', array(
						'type'   => 'checkbox',
                'allow_add' => true,
				'attr' => array(
					'id' => 'check-box'),
                'options' => array(
                    'required' => false
                )))
				->add("submit","submit")
				->getForm();
				
			$form->handleRequest($request);
			if ($form->isValid()) {
				$data = $form->getData();
				$i = 0;
				foreach($data["checkBox"] as $check){
					if($check == "1"){
						$selected = $i;
					}
					$i++;
				}
				$session = $this->getRequest()->getSession();
				$session->set("template",$template[$selected]);
				return $this->redirect($this->generateUrl('Settings-newPage'));
			}
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/templates/templateSettings.html.twig',
				array("template"=>$template,"form"=>$form->createView()));

		
		}
		
		
		public function manageTemplatesAction(Request $request)
		{
			$action = $request->query->get('action');
			$id = $request->query->get('id');
			if(isset($action) && isset($id)){
				$em = $this->getDoctrine()->getManager();
				$templateToDelete = $em->getRepository('CmsWebSiteBundle:Template')->find($id);
				if (!$templateToDelete) {
					throw $this->createNotFoundException(
						'Image not found for id : '.$id
					);	
				}
				$em->remove($templateToDelete);
				$em->flush();
				unlink($this->get('kernel')->getRootDir().$templateToDelete->getPath());
				$manager = new TemplateManager;
				$manager->removeTemplateAssets($templateToDelete->getName());
				unset($templateToDelete);
				return $this->redirect($this->generateUrl('Settings-manageTemplates'));
			}else{
				$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Template');
				$template = array();
				$template = $repo->findAll();
				return $this->render('CmsWebSiteBundle:WebSite:default/settings/templates/templateSettings.html.twig',
					array("template"=>$template));
			}
		}
		
		
	}	
?>