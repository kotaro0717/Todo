<?php
/**
 * view template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
* @author Kotaro Hokada <kotaro.hokada@gmail.com>
* @link http://www.netcommons.org NetCommons Project
* @license http://www.netcommons.org/license.txt NetCommons License
* @copyright Copyright 2014, NetCommons Project
* @package app.Plugin.Todo.View.Todo
*/
?>
<?php echo $this->Html->script('/todo/js/todo.js'); ?>
<?php echo $this->Html->css('/todo/css/todo.css'); ?>
<?php echo $this->element('setting/top_menu'); ?>
<div class="todo-table-responsive">
	<table class="table table-striped">
		<thead>
		<tr>
			<th>#</th>
			<th><?php echo __d('todo', 'Priority'); ?></th>
			<th><?php echo __d('todo', 'Completed'); ?></th>
			<th><?php echo __d('todo', 'Due date'); ?></th>
			<th><?php echo __d('todo', 'Task'); ?></th>
			<th><?php echo __d('todo', 'Progress'); ?></th>
			<th><?php echo __d('todo', 'Assigned'); ?></th>
			<th></th>
		</tr>
		</thead>
		<tr>
			<td>1</td>
			<td>1</td>
			<td>-</td>
			<td>2014/09/30</td>
			<td>ああああああああああああああああああああああ</td>
			<td>100%</td>
			<td>外田</td>
			<td></td>
		</tr>
		<tr>
			<td>1</td>
			<td>1</td>
			<td>-</td>
			<td>2014/09/30</td>
			<td>ああああああああああああああああああああああ</td>
			<td>100%</td>
			<td>外田</td>
			<td></td>
		</tr>
		<tr>
			<td>1</td>
			<td>1</td>
			<td>-</td>
			<td>2014/09/30</td>
			<td>ああああああああああああああああああああああ</td>
			<td>100%</td>
			<td>外田</td>
			<td></td>
		</tr>
		<tr>
			<td>1</td>
			<td>1</td>
			<td>-</td>
			<td>2014/09/30</td>
			<td>ああああああああああああああああああああああ</td>
			<td>100%</td>
			<td>外田</td>
			<td></td>
		</tr>
	</table>
</div>
