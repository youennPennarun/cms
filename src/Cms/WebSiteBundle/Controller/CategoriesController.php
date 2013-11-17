<?php
	namespace Cms\WebSiteBundle\Controller;
	 
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\Session\Session;
	use Cms\WebSiteBundle\Entity\Categories;
	 
	class CategoriesController extends Controller
	{
		public function newCategoryAction(Request $request){
			$categorie = new Categories;
			$form = $this->createFormBuilder($categorie)
				->add('name','text')
				->add("submit","submit")
				->getForm();
				
				
			
			$form->handleRequest($request);
			if ($form->isValid()) {
				$data = $form->getData();	// get all the inputs
				$rep = $this->getDoctrine()
							->getRepository('CmsWebSiteBundle:Categories');
							
				
				$cat = $rep->findOneBy(array("name"=>$categorie->getName()));
				
				if($cat == null){
					$em = $this->getDoctrine()->getManager();
					$em->persist($categorie);
					$em->flush();
					$this->get('session')->getFlashBag()->add(
						'validation',
						$categorie->getName().' is been created'
					);
					
				}else{
					$this->get('session')->getFlashBag()->add(
						'error',
						'This category name already exist'
					);
					$form = $this->createFormBuilder($categorie)
						->add('name','text')
						->add("submit","submit")
						->getForm();
				}
			}
		
		
			return $this->render('CmsWebSiteBundle:WebSite:default/settings/categories/categoriesSettings.html.twig',
				array("form"=>$form->createView()));
		
		
		}
		public function manageCategoriesAction(Request $request)
		{
			$action = $request->query->get('action');
			$id = $request->query->get('id');
			if(isset($action) && isset($id)){
				$em = $this->getDoctrine()->getManager();
				$categoryToDelete = $em->getRepository('CmsWebSiteBundle:Categories')->find($id);
				if (!$categoryToDelete) {
					throw $this->createNotFoundException(
						'Categorie not found for id : '.$id
					);	
				}
				$em->remove($categoryToDelete);
				$em->flush();
				$this->get('session')->getFlashBag()->set('validation', 'the category '.$categoryToDelete->getName().' is removed');
				return $this->redirect($this->generateUrl('Settings-manageCategories'));
			}else{
				$repo = $this->getDoctrine()
						->getRepository('CmsWebSiteBundle:Categories');
				$categories = array();
				$categories = $repo->findAll();
				return $this->render('CmsWebSiteBundle:WebSite:default/settings/categories/categoriesSettings.html.twig',
					array("categories"=>$categories));
			}
		}
	
		
	
	
	
	}
	
?>	