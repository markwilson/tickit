<?php

namespace Tickit\PermissionBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Tickit\UserBundle\Entity\User;

/**
 * User permissions form.
 *
 * Provides functionality for adding/editing permissions associated with a user.
 *
 * @package Tickit\PermissionBundle\Form\Type;
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class UserPermissionFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
    }


    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver); // TODO: Change the autogenerated stub
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'tickit_user_permission';
    }
}