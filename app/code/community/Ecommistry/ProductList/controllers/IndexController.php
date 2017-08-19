<?php

/**
 * Ecommistry ProductList
 *
 * @category   Ecommistry
 * @package    ProductList
 * @author     Ecommistry Team <support@ecommistry.com>
 * @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*/

class Ecommistry_ProductList_IndexController extends Mage_Core_Controller_Front_Action{
   
    /**
     * Checking if user is logged in or not
     * If not logged in then redirect to customer login
     */
    public function preDispatch()
    {
        parent::preDispatch();

		 $helper = Mage::helper('productlist');
		
		// check if Ecommistry ProductList is enable
		if(!$helper->isProductListEnable())
		{
			$this->norouteAction();
			return;
		}
		
		
        if (!Mage::getSingleton('customer/session')->authenticate($this)) {
            $this->setFlag('', 'no-dispatch', true);

        // message for not login user
        Mage::getSingleton('core/session')
                ->addSuccess(Mage::helper('productlist')->__('Please sign in or create a new account'));
        }
    } 


   public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Ecommistry Product List"));
	  $this->renderLayout(); 
	  
    }
}