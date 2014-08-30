<?php
/**
 * Todo Test Case
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Todo.Test.Model.Case
 */

App::uses('Todo', 'Todo.Model');

/**
 * Todo Test Case
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @package app.Plugin.Todo.Model
 */
class TodoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @var array
 */
	public $fixtures = array(
		'plugin.todo.todo',
		'plugin.todo.language',
		'plugin.todo.block',
		'plugin.todo.blocks_language',
		'plugin.todo.todo_block',
		'plugin.todo.part',
		'plugin.todo.languages_part',
		'plugin.todo.todo_part_setting'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Todo = ClassRegistry::init('Todo.Todo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Todo);

		parent::tearDown();
	}

/**
 * testFindById
 *
 * @return void
 */
	public function testFindById() {
		$id = 1;
		$rtn = $this->Todo->findById($id);
		$this->assertTrue(is_array($rtn));
	}

}
