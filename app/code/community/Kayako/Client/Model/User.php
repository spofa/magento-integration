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
 * User Model
 */
class Kayako_Client_Model_User extends Kayako_Client_Model_Authentication
{

	/**
	 * Constructor
	 */
	public function __construct()
	{
		parent::_construct();
		$this->init();
	}

	/**
	 * Returns User from email
	 *
	 * @param string $userEmail
	 */
	public function getUser($userEmail)
	{
		$_user = kyUser::search($userEmail);

		return $_user[0];
	}
}