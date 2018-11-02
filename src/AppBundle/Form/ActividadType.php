<?php

namespace AppBundle\Form;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class ActividadType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       // $builder->add('nomactividad', array('label' => 'Nombre'))->add('fechaactividad')->add('descripcionactividad')->add('validacion')->add('becario')->add('estado')->add('idrequisito')        ;
         $builder
         ->add('nomactividad',TextType::class, array('label' => 'Nombre', 'attr' => array('class' => 'form-control')))
         ->add('fechaactividad',DateType::class, array('label' => 'Fecha', 'attr' => array('class' => 'form-control')))
         ->add('descripcionactividad',TextareaType::class, array('label' => 'Descripcion', 'attr' => array('class' => 'form-control')))
         ->add('validacion',IntegerType::class, array('label' => 'Validacion', 'attr' => array('class' => 'form-control')))
         ->add('becario',TextType::class, array('label' => 'Becario', 'attr' => array('class' => 'form-control')))
         ->add('estado',IntegerType::class, array('label' => 'Estado', 'attr' => array('class' => 'form-control')))
         ->add('idrequisito', EntityType::class, array(
            // looks for choices from this entity
            'class' => 'AppBundle:Requisito',
        
            // uses the User.username property as the visible option string
            'choice_label' => 'nombre',));


    }
    

    /* {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Actividad'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_actividad';
    }


}
