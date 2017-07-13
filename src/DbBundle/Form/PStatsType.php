<?php

namespace DbBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PStatsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pName')
            ->add('tName')
            ->add('date', 'date')
            ->add('halftime')
            ->add('shot')
            ->add('shotongoal')
            ->add('assist')
            ->add('goal')
            ->add('owngoal')
            ->add('penaltykickmade')
            ->add('penaltykickattempt')
            ->add('offsides')
            ->add('keepersave')
            ->add('foul')
            ->add('yellowcard')
            ->add('redcard')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DbBundle\Entity\PStats'
        ));
    }
}
