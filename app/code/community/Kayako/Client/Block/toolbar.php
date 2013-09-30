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
 * Pagination Toolbar Block
 */
class Kayako_Client_Block_Toolbar extends Mage_Catalog_Block_Product_List_Toolbar {

	/**
	 * Returns Pager HTML
	 *
	 * @return string
	 */
	public function getPagerHtml()
	{
		$_pagerBlock = $this->getLayout()->createBlock('page/html_pager');

		if ($_pagerBlock instanceof Varien_Object) {

			$_pagerBlock->setAvailableLimit($this->getAvailableLimit());
			$_pagerBlock->setUseContainer(false)
				->setShowPerPage(false)
				->setShowAmounts(false)
				->setLimitVarName($this->getLimitVarName())
				->setPageVarName($this->getPageVarName())
				->setLimit($this->getLimit())
				->setCollection($this->getCollection());

			return $_pagerBlock->toHtml();
		}

		return '';
	}
}