<?php
/**
 * top menu template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Todo.View.Todo
 */
?>
<p class='text-right'>
	<?php
		echo $this->Form->input( 'display-all', array(
			'id' => 'todo-display-all-' . $frameId,
			'type' => 'checkbox',
			'label' => __d('todo', 'Display all'),
			'div' => false
		));
	?>

	<?php if ($blockEditable): ?>
		<button class='btn btn-default'
			ng-click='openBlockSetting()'
			ng-disabled='sendLock'
		><span class='glyphicon glyphicon-cog'> <?php echo __d('todo', 'Block setting'); ?></span></button>
	<?php endif; ?>

	<?php if ($contentEditable): ?>
		<button class='btn btn-primary'
			ng-click='openAdditionalTask()'
			ng-disabled='sendLock'
			><span class='glyphicon glyphicon-pencil'> <?php echo __d('todo', 'Add'); ?></span></button>
		<?php echo $this->element('setting/additionnal_task'); ?>
	<?php endif; ?>
</p>
