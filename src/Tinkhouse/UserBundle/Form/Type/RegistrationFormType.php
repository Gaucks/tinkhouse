<?php

namespace Tinkhouse\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // add your custom field
        $builder->add('username',   'text',         array('attr' => array('class' => 'register','placeholder' => 'JohnDoe')))
                ->add('email',      'email',        array('attr' => array('class' => 'register','placeholder' => 'tinKer@tinkhouse.com')))
                ->add('plainPassword', 'repeated',  array('type'              => 'password',
                                                          'options'           => array('translation_domain' => 'FOSUserBundle'),
                                                          'first_options'     => array('label' => 'form.password',             'attr' => array('class' => 'register','placeholder' => '4 caractères minimum'),),
                                                          'second_options'    => array('label' => 'form.password_confirmation','attr' => array('class' => 'register','placeholder' => 'Vérification'),),
                                                          'invalid_message'   => 'fos_user.password.mismatch'))
                ->add('usertype',   'entity',       array('class'    => 'UserBundle:tH\UserType',
                                                          'property' => 'type',
                                                          'disabled' => TRUE,
                                                          'label'    => 'Type de compte:',

            ));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'tinkhouse_user_registration';
    }
}