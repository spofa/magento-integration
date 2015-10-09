<?php
/**
 * @copyright      2001-2015 Kayako
 * @license        https://www.freebsd.org/copyright/freebsd-license.html
 * @link           https://github.com/kayako/magento-integration
 */

/**
 * Client Helper Data
 */
class Kayako_Client_Helper_Data extends Mage_Core_Helper_Abstract
{

	/**
	 * Retrieve ticket submission URL
	 *
	 * @return string
	 */
	public function getSubmitTicketUrl()
	{
		return $this->_getUrl('client/index/submitTicket');
	}

	/**
	 * Retrieve view ticket page url
	 *
	 * @return string
	 */
	public function getViewTicketUrl()
	{
		return $this->_getUrl('client/index/viewTicket');
	}
}