<?php

namespace Networking\InitCmsBundle\Model;

use Doctrine\ORM\EntityManager;
use Gedmo\Tree\Entity\Repository\NestedTreeRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
#use MyNamespace\GenericBundle\Repository\RepositoryUtils as MyRepositoryUtils;

/**
 * Description of MaterializedPathRepository
 *
 * @author rad
 */
class MaterializedPathRepository extends NestedTreeRepository
{
    /**
     * @param EntityManager $em
     * @param ClassMetadata $class
     */
    public function __construct(EntityManager $em, ClassMetadata $class)
    {
        parent::__construct($em, $class);
        //$this->repoUtils = new MyRepositoryUtils($this->_em, $this->getClassMetadata(), $this->listener, $this);
    }
}
