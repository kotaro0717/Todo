<?php
/**
 * TodoBlock Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Todo.Test.Model.Case
 */

App::uses('TodoBlock', 'Todo.Model');

/**
 * TodoBlock Test Case
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @package app.Plugin.Todo.Model
 */
class TodoBlockTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @var array
 */
	public $fixtures = array(
		'plugin.todo.todo',
		'plugin.todo.todo_block',
		'plugin.todo.todo_part_setting',
		'plugin.todo.todo_setting',
		'plugin.todo.block',
		'plugin.todo.language',
		'plugin.todo.blocks_language'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TodoBlock = ClassRegistry::init('Todo.TodoBlock');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TodoBlock);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->TodoBlock->findById($id);
		$this->assertTrue(is_array($rtn));
	}
}
