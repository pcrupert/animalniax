<?php

namespace Animalniax\ShelterBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * ShelterAdmin.
 *
 * @author rupert
 */
class ShelterAdmin extends Admin
{
    protected $translationDomain = 'AnimalniaxShelterBundle';

    protected function configureFormFields(FormMapper $form)
    {
        $form
                ->add('name', 'text', [
                    'label' => 'animalniax.shelter.fields.name',
                    'required' => true,
                ])
                ->add('address', 'textarea', [
                    'label' => 'animalniax.shelter.fields.address',
                    'required' => false,
                ])
                ->add('contactPerson', 'text', [
                    'label' => 'animalniax.shelter.fields.contact_person',
                    'required' => false,
                ])
                ->add('contactPhone', 'text', [
                    'label' => 'animalniax.shelter.fields.contact_phone',
                    'required' => false,
                ])
                ;
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
                ->add('name')
                ;
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
                ->addIdentifier('id')
                ->add('name')
                ->add('address')
                ->add('contactPerson')
                ->add('contactPhone')
                ;
    }
}
