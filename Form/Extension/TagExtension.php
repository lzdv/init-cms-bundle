<?php
/**
 * This file is part of the sko  package.
 *
 * (c) net working AG <info@networking.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Networking\InitCmsBundle\Form\Extension;

use Networking\InitCmsBundle\Form\DataTransformer\ModelsToStringListTransformer;
use Sonata\AdminBundle\Form\EventListener\MergeCollectionListener;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class TagExtension
 * @package Application\Networking\InitCmsBundle\Form\Extension
 * @author Yorkie Chadwick <y.chadwick@networking.ch>
 */
class TagExtension extends AbstractTypeExtension {

    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
//        if ($options['multiple'] && isset($options['taggable'])) {
//            if($options['taggable']){
//                $builder
//                    ->addEventSubscriber(new MergeCollectionListener($options['model_manager']))
//                    ->addViewTransformer(new ModelsToStringListTransformer($options['choice_list']), true);
//            }
//        }
    }

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        if (true === $options['multiple'] && false === $options['expanded'] && isset($options['taggable'])) {
//            $tags = array();
//            $choices = array();
//            foreach($view->vars['value'] as $key => $value){
//                if($value === true){
//                    $tags[] = $view->vars['choices'][$key]->label;
//                }
//                $choices[] =  sprintf('"%s"', $view->vars['choices'][$key]->label);
//            }
            $view->vars['taggable'] = $options['taggable'];
//            $view->vars['value'] = $tags;
//            $view->vars['choices'] = $choices;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setOptional(array(
            'taggable'
        ));
    }

    /**
     * Returns the name of the type being extended.
     *
     * @return string The name of the type being extended
     */
    public function getExtendedType()
    {
        return 'sonata_type_model';
    }
}