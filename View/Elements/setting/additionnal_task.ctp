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
					<table summary="設定フォーム" class="outer"><tbody><tr class="row"><th scope="row" class="nowrap"><label for="todo_priority_popup_todo_task_entry_16578">レベル</label></th><td class="nowrap"><select name="priority" class="todo_priority" id="todo_priority_popup_todo_task_entry_16578"><option value="0">低</option><option value="1">中</option><option value="2">高</option></select><label for="todo_state_popup_todo_task_entry_16578"><input type="checkbox" value="1" name="state" class="todo_state" id="todo_state_popup_todo_task_entry_16578">済</label></td></tr><tr class="row"><th scope="row" class="nowrap"><label for="todo_period_popup_todo_task_entry_16578">期限</label></th><td class="nowrap"><label><input type="text" name="period" class="date todo_period comp_calendar_text" id="todo_period_popup_todo_task_entry_16578"><a href="#" class="comp_calendar_icon"><img src="http://www.netcommons.org/themes/images/icons/default/calendar.gif" alt="カレンダー" title="カレンダーを表示します"></a></label><br><label for="todo_calendar_popup_todo_task_entry_16578"><input type="checkbox" value="1" name="calendar" class="todo_calendar" id="todo_calendar_popup_todo_task_entry_16578">カレンダーに記入</label></td></tr><tr class="row"><th scope="row" class="nowrap"><label for="todo_progress_popup_todo_task_entry_16578">進捗率</label></th><td class="nowrap"><label for="todo_progress_popup_todo_task_entry_16578"><select name="progress" class="todo_progress" id="todo_progress_popup_todo_task_entry_16578"><option value="0">0%</option><option value="10">10%</option><option value="20">20%</option><option value="30">30%</option><option value="40">40%</option><option value="50">50%</option><option value="60">60%</option><option value="70">70%</option><option value="80">80%</option><option value="90">90%</option><option value="100">100%</option></select></label></td></tr><tr class="row"><th scope="row" class="nowrap"><label for="todo_category_popup_todo_task_entry_16578">カテゴリ名</label></th><td class="nowrap"><select name="category_id" class="todo_category" id="todo_category_popup_todo_task_entry_16578"><option value="0">カテゴリなし</option><option value="1">aaa</option><option value="2">えええええ</option><option value="3">ああああ</option></select></td></tr><tr class="row"><th scope="row" class="nowrap"><label for="todo_task_value_popup_todo_task_entry_16578">Todo</label></th><td class="nowrap"><textarea name="task_value" class="todo_task_value" id="todo_task_value_popup_todo_task_entry_16578"></textarea></td></tr></tbody></table>
				</div>
			</div>
		</div>
	</div>
</div>
