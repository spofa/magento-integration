<?php
/**
 * @copyright      2001-2015 Kayako
 * @license        https://www.freebsd.org/copyright/freebsd-license.html
 * @link           https://github.com/kayako/magento-integration
 */

/**
 * Pagination Toolbar Block
 */
class Kayako_Client_Block_Toolbar extends Mage_Catalog_Block_Product_List_Toolbar
{

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