<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Show\ShowMapper;

/**
 * Class PlayerAdmin
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class PlayerAdmin extends Admin
{
    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
            ->add('name')
            ->add('position')
            ->add('number')
            ->add('birthday')
            ->add('height')
            ->add('weight')
            ->add('inRoster');
    }

    /**
     * {@inheritdoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('name')
            ->add('position')
            ->add('number')
            ->add('birthday')
            ->add('height')
            ->add('weight')
            ->add('inRoster')
            ->add('_action', 'actions', [
                'actions' => [
                    'show'   => [],
                    'edit'   => [],
                    'delete' => []
                ]
            ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('position')
            ->add('number')
            ->add('birthday')
            ->add('height')
            ->add('weight')
            ->add('inRoster');
    }

    /**
     * {@inheritdoc}
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('position')
            ->add('number')
            ->add('birthday')
            ->add('height')
            ->add('weight')
            ->add('inRoster');
    }
}
