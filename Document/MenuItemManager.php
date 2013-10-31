<?php
/**
 * This file is part of the init_cms_sandbox package.
 *
 * (c) net working AG <info@networking.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Networking\InitCmsBundle\Document;

use Doctrine\ODM\MongoDB\DocumentManager;

/**
 * Class MenuItemManager
 * @package Networking\InitCmsBundle\Document
 * @author Yorkie Chadwick <y.chadwick@networking.ch>
 */
class MenuItemManager
{
    /**
     * @var \Doctrine\ODM\MongoDB\DocumentManager
     */
    protected $dm;

    /**
     * @param DocumentManager $dm
     * @param $class
     */
    public function __construct(DocumentManager $dm, $class)
    {
        parent::__construct($dm, $class);
        $this->dm = $dm;
    }

}
 