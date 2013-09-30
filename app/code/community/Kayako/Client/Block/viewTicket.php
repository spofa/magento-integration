<?php
/**
 * ###############################################
 *
 * Kayako Magento Integration
 * _______________________________________________
 *
 * @author         Amarjeet Kaur
 *
 * @package        SWIFT
 * @copyright      Copyright (c) 2001-2013, Kayako
 * @license        http://www.kayako.com/license
 * @link           http://www.kayako.com
 *
 * ###############################################
 */

/**
 * View Ticket Block
 */
class Kayako_Client_Block_ViewTicket extends Mage_Core_Block_Template {

	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::__construct();

		$_Ticket            = Mage::getModel("client/ticket");
		$params             = $this->getRequest()->getParams();
		$_loggedInUserEmail = Mage::getSingleton('customer/session')->getCustomer()->getEmail();

		$_allTickets        = $_Ticket->getAllTickets($_loggedInUserEmail, $params);
		$_perPageItems      = $_Ticket->getItemsPerPage($_allTickets, $params);
		$collection         = $_Ticket->getVarienDataCollection($_perPageItems);

		$this->setCollection($collection);
	}

	/**
	 * Prepares layout
	 *
	 * @return $this
	 */
	protected function _prepareLayout()
	{
		parent::_prepareLayout();

		$toolbar = $this->getToolbarBlock();

		// Retrieve Collection
		$collection = $this->getCollection();

		// Retrieve available orders
		$orders = $this->getAvailableOrders();

		if (!empty($orders)) {
			$toolbar->setAvailableOrders($orders);
		}

		$sort = $this->getSortBy();
		$toolbar->setDefaultOrder($sort);

		$dir = $this->getDefaultDirection();
		$toolbar->setDefaultDirection($dir);

		$toolbar->setCollection($collection);

		$this->setChild('toolbar', $toolbar);
		$this->getCollection()->load();

		return $this;
	}

	/**
	 * Returns default direction
	 *
	 * @return string
	 */
	public function getDefaultDirection(){
        return 'asc';
    }

	/**
	 * Returns available orders
	 *
	 * @return array
	 */
	public function getAvailableOrders(){
        return array('displayticketid' =>'Ticket ID', 'lastactivity'=> 'Last Update','lastreplier'=>'Last Replier','department'=>'Department','type'=>'Type','priority'=>'Priority');
    }

	/**
	 * Returns sortby
	 *
	 * @return string
	 */
	public function getSortBy(){
        return 'displayticketid';
    }

	/**
	 * Returns toolbar block
	 *
	 * @return mixed
	 */
	public function getToolbarBlock() {
        $block = $this->getLayout()->createBlock('client/toolbar', microtime());

        return $block;
    }

	/**
	 * Returns mode
	 *
	 * @return mixed
	 */
	public function getMode() {
        return $this->getChild('toolbar')->getCurrentMode();
    }

	/**
	 * Returns toolbar HTML
	 *
	 * @return mixed
	 */
	public function getToolbarHtml() {
        return $this->getChildHtml('toolbar');
    }
}