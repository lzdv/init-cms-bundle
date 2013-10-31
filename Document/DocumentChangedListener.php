<?php
/**
 * This file is part of the Networking package.
 *
 * (c) net working AG <info@networking.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Networking\InitCmsBundle\Document;

use Doctrine\Common\EventArgs;
use Networking\InitCmsBundle\Model\ModelChangedListener;

/**
 * Class DocumentChangedListener
 * @package Networking\InitCmsBundle\Document
 * @author Yorkie Chadwick <y.chadwick@networking.ch>
 */
class DocumentChangedListener extends ModelChangedListener
{

    /**
     * @param EventArgs $args
     */
    public function preRemove(EventArgs $args)
    {
        parent::preRemove($args);

        if (method_exists($args->getDocument(), 'isDeletable')) {
            if ($args->getDocument()->isDeletable() == 0) {
                //find a solution... like throwing super Exception thingy
            }
        }
    }

    /**
     * @param EventArgs $args
     * @param string $method
     * @return mixed|void
     */
    public function getLoggingInfo(EventArgs $args, $method = '')
    {
        $entity = $args->getDocument();
        if ($this->getSecurityContext()->getToken() && $this->getSecurityContext()->getToken()->getUser() != 'anon.') {

            $username = $this->getSecurityContext()->getToken()->getUser()->getUsername();

        } else {
            $username = 'doctrine:fixtures:load!';
        }
        $this->logger->info(
            sprintf('entity %s', $method),
            array('username' => $username, 'class' => get_class($entity), 'id' => $entity->getId())
        );

    }

}