<?php

/**
 * This file is part of the Networking package.
 *
 * (c) net working AG <info@networking.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Networking\InitCmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM,
    Sonata\MediaBundle\Entity\BaseGalleryHasMedia as BaseGalleryHasMedia;

/**
 * @author Yorkie Chadwick <y.chadwick@networking.ch>
 *
 * @ORM\Table(name="media__gallery_media")
 * @ORM\Entity()
 */
class GalleryHasMedia extends BaseGalleryHasMedia
{

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    protected $id;

    /**
     * @var string $link
     */
    protected $link;
    
    /**
     * @var string $caption
     */
    protected $caption;
    
    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $link
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param $caption
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }
}