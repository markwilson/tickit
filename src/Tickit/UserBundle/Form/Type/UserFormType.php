<?php

namespace Tickit\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * User form.
 *
 * Provides functionality for adding/editing any user in the system.
 *
 * The built in ProfileFormType provided by FOSUserBundle is used for users who are
 * editing their own profile, but this form provides additional functionality
 *
 * @author James Halsall <james.t.halsall@googlemail.com>
 */
class UserFormType extends AbstractType
{
    /**
     * Builds the form.
     *
     * @param FormBuilderInterface $builder
     * @param array                $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if (null === $builder->getData()) {
            $passwordLabel = 'Password';
        } else {
            $passwordLabel = 'New Password';
        }

        $builder->add('forename', 'text')
                ->add('surname', 'text')
                ->add('username', 'text')
                ->add('email', 'email')
                ->add(
                    'password', 'repeated', array(
                        'type' => 'password',
                        'required' => false,
                        'first_options' => array('label' => $passwordLabel),
                        'second_options' => array('label' => 'Confirm ' . $passwordLabel),
                        'invalid_message' => 'Oops! Looks like those passwords don\'t match'
                    )
                )
                ->add('group', 'entity', array('class' => 'Tickit\UserBundle\Entity\Group'));
    }

    /**
     * Sets the default options for this form
     *
     * @param OptionsResolverInterface $resolver The options resolver
     *
     * @return void
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $options = array('data_class' => 'Tickit\UserBundle\Entity\User');
        $resolver->setDefaults($options);
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'tickit_user';
    }
}