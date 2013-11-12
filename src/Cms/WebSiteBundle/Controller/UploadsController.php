<?php
	namespace Cms\WebSiteBundle\Controller;
	 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	use Cms\WebSiteBundle\Entity\Uploader;
	use Cms\WebSiteBundle\Entity\Image;
	 
	class UploadsController extends BaseController 
	{
		public function imagesWysiwygAction()
		{
				$base = $this->container->getParameter('base-path');
				$url = $this->get('kernel')->getRootDir() . '/../web/uploads/'.time().'_'.$_FILES['upload']['name'];
				$urlBis = $base.'/web/uploads/'.time()."_".$_FILES['upload']['name'];

			 //extensive suitability check before doing anything with the file…
				if (($_FILES['upload'] == "none") OR (empty($_FILES['upload']['name'])) ){
				   $message = "No file uploaded.";
				}else if ($_FILES['upload']["size"] == 0){
				   $message = "The file is of zero length.";
				}else if (($_FILES['upload']["type"] != "image/pjpeg") AND ($_FILES['upload']["type"] != "image/jpeg") AND ($_FILES['upload']["type"] != "image/png")){
				   $message = "The image must be in either JPG or PNG format. Please upload a JPG or PNG instead.";
				}else if (!is_uploaded_file($_FILES['upload']["tmp_name"])){
				   $message = "You may be attempting to hack our server. We're on to you; expect a knock on the door sometime soon.";
				}else {
				  $message = "";
				  $move = move_uploaded_file($_FILES['upload']['tmp_name'], $url);
				  if(!$move){
					 $message = "Error moving uploaded file. Check the script is granted Read/Write/Modify permissions.";
				  }
				}
				//$image = null;
				$image = new Image;
				$image->setName($_FILES['upload']['name']);
				
				$base = $this->container->getParameter('base-path');
				$urlBis = $base.'/web/uploads/'.$img->getClientOriginalName();
				$image->setPath($urlBis);
				$em = $this->getDoctrine()->getManager();
				$em->persist($image);
				$em->flush();
			$funcNum = $_GET['CKEditorFuncNum'] ;
			echo "<script type='text/javascript'/>window.parent.CKEDITOR.tools.callFunction($funcNum, '$urlBis', '$message');</script/>";
			return $this->render('');
		}
		
		public function imagesAction(Request $request)
		{
			$defaultData = array();
			
					$base = $this->container->getParameter('base-path');
					echo $base;
			$form = $this->createFormBuilder($defaultData)
				->add("images","file", array(
					'label' => "Images : ",
					"attr" => array(
						"accept" => "image/*",
						"multiple" => "multiple",
						"name" => "images[]"	
					)))
				->add("Upload","submit")
				->getForm();
			$form->handleRequest($request);
			if ($form->isValid()) {
				$data = $form->getData();
				foreach($data["images"] as $img){
					$uploader = new Uploader;
					$uploader->uploadImage($img);
					
					$image = new Image;
					$image->setName($img->getClientOriginalName());
					
					$base = $this->container->getParameter('base-path');
					$urlBis = $base.'/web/uploads/'.$img->getClientOriginalName();
					$image->setPath($urlBis);
					$em = $this->getDoctrine()->getManager();
					$em->persist($image);
					$em->flush();
					
				}
				return $this->redirect($this->generateUrl('Uploads-browseImage'));
			}
			
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/uploadImage.html.twig',array ("form"=> $form->createView()));
		}
		
		public function browseImagesAction(Request $request)
		{
			$imgList=array();
			$action = $request->query->get('action');
			$id = $request->query->get('id');
			if($action != "" && $id == ""){
				return $this->redirect($this->generateUrl('Uploads-browseImage'));
			}
			if($action == ""){
				$repo = $this->getDoctrine()
					->getRepository('CmsWebSiteBundle:Image');
				$imgList = $repo->findAll();
			}else if($action == "delete" && $id != ""){
				$em = $this->getDoctrine()->getManager();
				$imgToDelete = $em->getRepository('CmsWebSiteBundle:Image')->find($id);
				if (!$imgToDelete) {
					throw $this->createNotFoundException(
						'Image not found for id : '.$id
					);
				}
				$em->remove($imgToDelete);
				$em->flush();
				unlink($this->get('kernel')->getRootDir() . '/../..'.$imgToDelete->getPath());
				unset($imgToDelete);
				return $this->redirect($this->generateUrl('Uploads-browseImage'));
			}
			
			foreach($imgList as $i){
				echo $i->getPath()."<br>";
				}
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/imageList.html.twig',array ("imgList"=> $imgList,"action"=>$action,"id"=>$id));
		}
		
		public function selectImagesWysiwygAction(Request $request)
		{
			
			$repo = $this->getDoctrine()
				->getRepository('CmsWebSiteBundle:Image');
			$imgList = $repo->findAll();
			
			
			$from = $request->query->get('from');
			
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/selectImage-wysiwyg.html.twig',array ("imgList"=> $imgList,"from" => $from));
		}
	}
?>