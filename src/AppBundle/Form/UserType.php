<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, ['error_bubbling' => true, 'attr' => ['class' => 'anyClass']])
            ->add('username', TextType::class, ['error_bubbling' => true])
            ->add('roles', ChoiceType::class, ['multiple' => true, 'expanded' => true, 'choices' => ['ROLE_USER' => 'ROLE_USER', 'ROLE_ADMIN' => 'ROLE_ADMIN']])
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => ['label' => 'Password'],
                'second_options' => ['label' => 'Repeat Password'],
                'error_bubbling' => true,
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => 'AppBundle\Entity\User',
            ]
        );
    }

    public function getName()
    {
        return 'app_bundle_user_type';
    }
}