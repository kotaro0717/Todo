<?php
/**
 * TodoSettingFixture
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Todo.Test.Model.Fixture
 */

/**
 * TodoSettingFixture
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @package app.Plugin.Todo.Model
 */
class TodoSettingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'todo_block_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified_user' => array('type' => 'integer', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'todo_block_id' => 1,
		),
	);

}
