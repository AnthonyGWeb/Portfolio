<?php

namespace Grindatto\WebSiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array(
                'label' => 'Titre',
            ))
            ->add('date', 'text', array(
                'label' => 'Date (manuel)',
            ))
            ->add('content', 'textarea', array(
                'label' => 'Description',
            ))
            ->add('ordre', 'integer', array(
                'label' => 'Ordre',
            ))
            ->add('visibility', 'checkbox', array(
                'label' => 'Visible',
                'required' => false,
            ))
            ->add('save', 'submit', array(
                'label' => 'Enregistrer'
            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Grindatto\WebSiteBundle\Entity\Formation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'grindatto_websitebundle_formation';
    }
}
