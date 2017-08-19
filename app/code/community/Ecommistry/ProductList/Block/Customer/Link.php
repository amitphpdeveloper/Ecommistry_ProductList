<?php

/**
 * Ecommistry ProductList
 *
 * @category   Ecommistry
 * @package    ProductList
 * @author     Ecommistry Team <support@ecommistry.com>
 * @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/
   
class Ecommistry_ProductList_Block_Customer_Link extends Mage_Core_Block_Template{   

 /*
 * Add Navigation menu item in my account section
 */
 public function addLinkToParentBlock() 
    {
		$helper = Mage::helper('productlist');
        $parent = $this->getParentBlock();
        if ($parent) {
            if ($helper->isProductListEnable()) {
                $parent->addLink(
                    'Ecommistry ProductList',
                    'productlist',
                    'Ecommistry ProductList'
                );

            }
        } 
    }


}