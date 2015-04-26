<?php
/**
 * Created by PhpStorm.
 * User: molodtsov
 * Date: 26.04.15
 * Time: 20:57
 */

namespace SystemBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UserAdmin extends Admin
{
    // Поля, отображаемые в формах create/edit
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array('label' => 'Post Title'))
//            ->add('username', 'entity', array('class' => 'Acme\DemoBundle\Entity\User'))
            ->add('username') //если не указан Тип, SonataAdminBundle попытается угадать его
            ->add('password') //если не указан Тип, SonataAdminBundle попытается угадать его
            ->add('description') //если не указан Тип, SonataAdminBundle попытается угадать его
            ->add('isActive', 'checkbox') //если не указан Тип, SonataAdminBundle попытается угадать его
            ->add('created', 'date') //если не указан Тип, SonataAdminBundle попытается угадать его
            ->add('updated', 'date') //если не указан Тип, SonataAdminBundle попытается угадать его
        ;
    }

    // Поля, отображаемые в формах фильтров
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('username')
            ->add('description')
            ->add('isActive')
        ;
    }

    // Поля, отображаемые в списках
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('username')
            ->add('isActive')
        ;
    }
}