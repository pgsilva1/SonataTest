<?php
/**
 * Created by PhpStorm.
 * User: desenvolvimento
 * Date: 10/03/17
 * Time: 09:47
 */
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class BlogPostAdmin extends AbstractAdmin
{
    //Form
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
            ->add('body')
            ->add('draft')
            ->add('category')
        ;
    }

    //Datagrid
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('draft')
            ->add('category')
        ;
    }

    //Identificador ("link")
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('body')
            ->add('draft')
            ->add('category')
        ;
    }
    //------------Adicionados----------------

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('title')
        ;
    }

    public function toString($object)
    {
        return $object->getTitle();
    }
}