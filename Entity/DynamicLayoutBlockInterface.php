<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Networking\InitCmsBundle\Entity;

/**
 *
 * @author rad
 */
interface DynamicLayoutBlockInterface {
    
    public function setDynamic($isDynamic);
    public function getDynamic();
    
}
