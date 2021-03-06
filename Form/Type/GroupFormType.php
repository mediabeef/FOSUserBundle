<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class GroupFormType extends AbstractType
{
    private $class;

    /**
     * @param string $class The Group class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name');
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultOptions()
    {
        return array(
            'data_class' => $this->class,
            'intention'  => 'group',
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'fos_user_group';
    }
}
