<?php

namespace App\Form;

use App\Entity\User;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RegistrationType extends ApplicationType
{   
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, $this->getConfiguration("Prénom", "Ex: Michel "))
            ->add('lastName', TextType::class, $this->getConfiguration("Nom", "Ex: Dupont  "))
            ->add('email', EmailType::class, $this->getConfiguration("Email", "Ex: MichelDupont@exemple.com "))
            ->add('picture', UrlType::class, $this->getConfiguration("Photo de profil", "Ex: https://monavatar.fr/moi "))
            ->add('hash', PasswordType::class, $this->getConfiguration("Mot de passe", "Entrer un mot de passe "))
            ->add('passwordConfirm', PasswordType::class, $this->getConfiguration("Confirmation de mot de pass", "Confirmer votre mot de passe"))
            ->add('introduction', TextType::class, $this->getConfiguration("Introduction", "Présentez vous en quelques mots "))
            ->add('description', TextareaType::class, $this->getConfiguration("Description détaillée", "C'est le moment de vous présenter en details ... "))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
