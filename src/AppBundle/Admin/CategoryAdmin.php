<?php
/**
 * Created by PhpStorm.
 * User: desenvolvimento
 * Date: 10/03/17
 * Time: 09:37
 */
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CategoryAdmin extends AbstractAdmin
{
    //Form
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('name', 'text');
    }

    //Datagrid
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
    }

    //Identificador ("links")
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name')
        ;
    }

    //-------------Adicionados-----------------
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
        ;
    }

    public function toString($object)
    {
        return $object->getName();
    }
}