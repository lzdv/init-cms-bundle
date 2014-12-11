<?php
/**
 * This file is part of the Networking package.
 *
 * (c) net working AG <info@networking.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Networking\InitCmsBundle\Admin\Model;

use Sonata\MediaBundle\Admin\GalleryHasMediaAdmin as SonataGalleryAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

/**
 * Class GalleryAdmin
 * @package Networking\InitCmsBundle\Admin\Model
 * @author Yorkie Chadwick <y.chadwick@networking.ch>
 */
class GalleryHasMediaAdmin extends SonataGalleryAdmin
{


    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $link_parameters = array();

        if ($this->hasParentFieldDescription()) {
            $link_parameters = $this->getParentFieldDescription()->getOption('link_parameters', array());
        }

        if ($this->hasRequest()) {
            $context = $this->getRequest()->get('context', null);

            if (null !== $context) {
                $link_parameters['context'] = $context;
            }
        }

        $formMapper
            ->add('media', 'sonata_type_model_list', array('required' => false), array(
                'link_parameters' => $link_parameters
            ))
            ->add('caption', null, array('required' => false))
            ->add('link', null, array('required' => false))
            ->add('enabled', null, array('required' => false))
            ->add('position', 'hidden')
        ;
    }
    
}
