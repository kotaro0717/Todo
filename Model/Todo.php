<?php
/**
 * Todo Model
 *
 * @property Todo $Todo
 * @property Language $Language
 * @property Block $Block
 * @property Part $Part
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Todo.Model
 */

App::uses('TodoAppModel', 'Todo.Model');

/**
 * Todo Model
 *
 * @property Todo $Todo
 * @property Language $Language
 * @property Block $Block
 * @property Part $Part
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @package app.Plugin.Todo.Model
 */
class Todo extends TodoAppModel {
/**
 * table name
 *
 * @author  Shohei Nakajima <nakajimashouhei@gmail.com>
 * @var     string
 */
	public $useTable = 'todo';

/**
 * Use database config
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @var string
 */
	//public $useDbConfig = 'master';

/**
 * Validation rules
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @var array
 */
	public $validate = array(
		'todo_block_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
		'language_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Security Error! Unauthorized input.',
			),
		),
	);

/**
 * belongsTo associations
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @var array
 */
	public $belongsTo = array(
		'TodoBlock' => array(
			'className' => 'TodoBlock',
			'foreignKey' => 'todo_block_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Language' => array(
			'className' => 'Language',
			'foreignKey' => 'language_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'TodoTask' => array(
			'className' => 'Todo.TodoTask',
			'foreignKey' => 'todo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),

	);
/**
 * get todo tasks
 *
 * @param int $blockId blocks.id
 * @param int $languageId languages.id
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @return array TodoTasks
 */
	public function getTasks($blockId, $languageId) {
		$conditions = array(
			'block_id' => $blockId,
			'language_id' => $languageId,
		);
		return $this->find('first', array(
			'conditions' => $conditions,
			//'order' => $this->name . '.id DESC',
		));

	}

}
