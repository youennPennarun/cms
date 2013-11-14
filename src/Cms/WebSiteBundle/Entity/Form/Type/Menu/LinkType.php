<?php
namespace Cms\WebSiteBundle\Entity\Form\Type\Menu;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LinkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('linkName'); 
        $builder->add('path');
		
    }
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'Cms\WebSiteBundle\Entity\Link',
		));
	}
	

    public function getName()
    {
        return 'link';
    }
	

	
}

?>