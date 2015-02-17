<?php

namespace Natalia\TadeuszBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReflectionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array('label' => "Reflection title"))
            ->add('text', 'textarea')
            ->add('createDate', 'date')
            ->add('author')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Natalia\TadeuszBundle\Entity\Reflection'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'natalia_tadeuszbundle_reflection';
    }
}
