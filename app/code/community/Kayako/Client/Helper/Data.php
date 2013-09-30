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

class Kayako_Client_Helper_Data extends Mage_Core_Helper_Abstract {

	/**
     * Retrieve ticket submission URL
     *
     * @return string
     */
    public function getSubmitTicketUrl() {
        return $this->_getUrl('client/index/submitTicket');
    }

    /**
     * Retrieve view ticket page url
     *
     * @return string
     */
    public function getViewTicketUrl() {
        return $this->_getUrl('client/index/viewTicket');
    }
}