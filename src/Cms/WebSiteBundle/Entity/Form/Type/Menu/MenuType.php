<?php
namespace Cms\WebSiteBundle\Entity\Form\Type\Menu;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Cms\WebSiteBundle\Entity\Form\Type\Menu\LinkType;

class MenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name'); 
		$builder->add('content', 'collection', array(
						'type' => new LinkType(),
						'allow_add' => true,
						'allow_delete' => true,
						'by_reference' => false,
					));
		$builder->add('submit','submit');

		
		

    }

    public function getName()
    {
        return 'menu';
    }
	

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Cms\WebSiteBundle\Entity\Menu',
		));
		
	}
}



?>