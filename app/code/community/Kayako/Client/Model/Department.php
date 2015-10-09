<?php
/**
 * @copyright      2001-2015 Kayako
 * @license        https://www.freebsd.org/copyright/freebsd-license.html
 * @link           https://github.com/kayako/magento-integration
 */

/**
 * Department Model
 */
class Kayako_Client_Model_Department extends Kayako_Client_Model_Authentication
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
	 * Returns Department list
	 *
	 * @return array
	 */
	public function getDepartmentList()
	{
		$options_array = array();

		$departments_tree = $this->getDepartmentsTree();
		foreach ($departments_tree as $key => $val) {
			$options_array[$key] = $val['department'];
			foreach ($val['child_departments'] as $child_dept_key => $child_dept_value) {
				$options_array[$child_dept_key] = $child_dept_value;
			}
		}

		return $options_array;
	}

	/**
	 * Returns Department tree information
	 *
	 * @return array
	 */
	public function getDepartmentsTree()
	{
		$departments_tree = array();
		$all_departments  = kyDepartment::getAll()->filterByModule(kyDepartment::MODULE_TICKETS)->filterByType(kyDepartment::TYPE_PUBLIC);

		$top_departments = $all_departments->filterByParentDepartmentId(null)->orderByDisplayOrder();
		foreach ($top_departments as $top_department) {
			$departments_tree[$top_department->getId()] = array(
				'department'        => $top_department,
				'child_departments' => $all_departments->filterByParentDepartmentId($top_department->getId())->orderByDisplayOrder()
			);
		}

		return $departments_tree;
	}

	/**
	 * Retrieve Department by ID
	 *
	 * @param int $department_id
	 *
	 * @return object
	 */
	public function getDepartmentByID($department_id)
	{
		$department = kyDepartment::get($department_id);

		return $department;
	}

	/**
	 * Returns Department list
	 *
	 * @return kyResultSet
	 */
	public function getAllDepartments()
	{
		$_departments = kyDepartment::getAll();

		return $_departments;
	}
}