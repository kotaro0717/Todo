<?php
/**
 * Todo Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Todo.Controller
 */

App::uses('TodoAppController', 'Todo.Controller');

/**
 * Todo Controller
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @package app.Plugin.Todo.Controller
 */
class TodoController extends TodoAppController {

/**
 * use model
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @var array
 */
	public $uses = array(
		'Frames.Frame',
		'Todo.Todo',
		'Todo.TodoTask'
	);

/**
 * beforeFilter
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

/**
 * index
 *
 * @param int $frameId frames.id
 * @param string $lang language
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @return CakeResponse
 */
	public function index($frameId = 0, $lang = '') {
		//フレーム初期化処理
		if (! $this->_initializeFrame($frameId, $lang)) {
			$this->response->statusCode(400);
			return $this->render(false);
		}
		$params = array(
			'fields' => array('Frame.block_id'),
			'conditions' => array('id' => $frameId),
			'recursive' => -1,
		);
		$frame = $this->Frame->find('first', $params);
		if (! $frame) {
			return;
		}

		$this->set('todo_tasks', $this->Todo->getTasks($frame['Frame']['block_id'], $lang));
	}

}
