<?php

namespace App\Form;

use App\Entity\Solocitud;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DemoFormType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        //definimos los campos
        $builder->add('nombre');
        $builder->add('email', EmailType::class);
        $builder->add('ciudad', ChoiceType::class,
    [
            'choices' => [
                'Madrid' => 'Madrid',
                'Barcelona' => 'Barcelona',
                'Sevilla' => 'Sevilla'
            ],
            'placeholder' =>'Elige una opcion'
    ]);
        $builder->add ('privacidad', CheckboxType::class,
        [
            'label' => 'Acepto la politica de privacidad',
            'mapped' => false
        ]); 
        $builder->add('Enviar', SubmitType::class);
    }
        public function configureOptions(OptionsResolver $resolver) //Para manejar los datos del formulario de manera dinamica
        {
           $resolver->setDefaults(['data_class' => Solocitud::class]);
            
        }

    
};
  

