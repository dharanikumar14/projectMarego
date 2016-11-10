<?php

namespace deproject\firstBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class SoldticketsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
          $builder
            ->add('tId')
            ->add('cId')
            ->add('pid')
            ->add('gId')
            ->add('quantity')
            ->add('pricePerTicket')
            ->add('total')
            ->add('date_created', DateType::class, array(
    'widget' => 'single_text',
    // this is actually the default format for single_text
    'format' => 'yyyy-MM-dd',
));
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'deproject\firstBundle\Entity\Soldtickets',
        	'data_class' => 'deproject\firstBundle\Entity\Partners'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'deproject_firstbundle_soldtickets';
    }
}
