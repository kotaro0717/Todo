<?php
/**
 * additionnal task template
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Kotaro Hokada <kotaro.hokada@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 * @package app.Plugin.Todo.View.Todo
 */
?>
<div ng-controller="Announcements.setting">
	<div class="modal fade todo-additional-task"
		 role="dialog"
		 aria-hidden="true"
			>
		<div class="modal-dialog nc-modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button
							type="button"
							class="close"
							data-dismiss="modal"
							>
						<span aria-hidden="true">&times;</span>
						<span class="sr-only"><?php echo __('Close'); ?></span>
					</button>
					<h3 class="modal-title">
						<?php echo __d('todo', 'Add task'); ?>
					</h3>
				</div>
				<div class="modal-body">
					<?php echo $this->element('setting/additionnal_task_body'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
