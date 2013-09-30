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
 * Authentication Model
 */
set_include_path(get_include_path() . PS . Mage::getBaseDir('lib') . DS . 'KayakoAPI');
require_once('kyIncludes.php');

class Kayako_Client_Model_Authentication extends Varien_Object
{
	private $_apiKey;
	private $_secretKey;
	private $_apiURL;

	/**
	 * Initialize API connection
	 */
	public function init()
	{
		$_config = new kyConfig($this->getApiURL(), $this->getApiKey(), $this->getSecretKey());
		$_config->setIsStandardURLType(true);
		$_config->setDebugEnabled(true);
		kyConfig::set($_config);
	}

	/**
	 * Retrieve API key
	 *
	 * @return string
	 */
	private function getApiKey()
	{
		$this->_apiKey = Mage::getStoreConfig('client/settings/api_key');

		return $this->_apiKey;
	}

	/**
	 * Retrieve Secret Key
	 *
	 * @return string
	 */
	private function getSecretKey()
	{
		$this->_secretKey = Mage::getStoreConfig('client/settings/secret_key');

		return $this->_secretKey;
	}

	/**
	 * Retrieve API URL
	 *
	 * @return string
	 */
	private function getApiURL()
	{
		$this->_apiURL = Mage::getStoreConfig('client/settings/api_url');

		return $this->_apiURL;
	}

	/**
	 * Returns Varien data collection
	 *
	 * @param array $items
	 *
	 * @return Varien_Data_Collection
	 */
	public function getVarienDataCollection($items)
	{
		$collection = new Varien_Data_Collection();
		foreach ($items as $item) {
			$_Varien = new Varien_Object();
			$_Varien->setData($item);
			$collection->addItem($_Varien);
		}

		return $collection;
	}
}