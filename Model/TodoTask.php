<?php
/**
 * TodoTask Model
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
 * TodoTask Model
 *
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @package app.Plugin.Todo.Model
 */
class TodoTask extends TodoAppModel {

	/**
	 * priority low
	 *
	 * @var int
	 */
	const PRIORITY_LOW = 0;

	/**
	 * priority normal
	 *
	 * @var int
	 */
	const PRIORITY_NORMAL = 1;

	/**
	 * priority high
	 *
	 * @var int
	 */
	const PRIORITY_HIGH = 2;
}