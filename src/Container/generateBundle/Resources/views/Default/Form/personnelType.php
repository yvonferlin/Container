<?php

namespace TC\GenerateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class personnelType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nompersonnel')
            ->add('email')
            ->add('fonction')
            ->add('telpersonnel')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TC\GenerateBundle\Entity\personnel'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tc_generatebundle_personnel';
    }
}
