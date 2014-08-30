<?php
/**
 * TodoPartSettingTest Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Todo.Test.Model.Case
 */

App::uses('TodoPartSetting', 'Todo.Model');

/**
 * TodoPart Test Case
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @package app.Plugin.Todo.Model
 */
class TodoPartSettingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @var array
 */
	public $fixtures = array(
		'plugin.todo.todo_part_setting',
		'plugin.todo.block',
		'plugin.todo.language',
		'plugin.todo.blocks_language',
		'plugin.todo.part',
		'plugin.todo.languages_part'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TodoPartSetting = ClassRegistry::init('Todo.TodoPartSetting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TodoPartSetting);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->TodoPartSetting->findById($id);
		$this->assertTrue(is_array($rtn));
	}

}
