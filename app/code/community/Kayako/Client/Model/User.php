<?php
/**
 * @copyright      2001-2015 Kayako
 * @license        https://www.freebsd.org/copyright/freebsd-license.html
 * @link           https://github.com/kayako/magento-integration
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