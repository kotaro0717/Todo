<?php
	echo $this->Form->create('TodoTask');
?>
<fieldset>
	<dl>
		<dt>
			<?php
				$labelId = 'todo-priority-' . $frameId;
				echo $this->Form->label('priority', __d('todo', 'Priority'), array('id' => $labelId));
			?>
		</dt>
		<dd>
			<?php
				$settings = array(
					'type' => 'select',
					'options' => array(
						TodoTask::PRIORITY_LOW => __d('todo', 'low'),
						TodoTask::PRIORITY_NORMAL => __d('todo', 'normal'),
						TodoTask::PRIORITY_HIGH => __d('todo', 'high'),
					),
					'value' => '',
					'label' => false,
					'div' => false,
					'for' => $labelId,
				);
				echo $this->Form->input('priority', $settings);
				echo $this->Form->input( 'display-all', array(
					'id' => 'todo-display-all-' . $frameId,
					'type' => 'checkbox',
					'label' => __d('todo', 'Completed'),
					'div' => false
				));
			?>
		</dd>
		<dt>
			<?php
				$labelId = 'todo-period-' . $frameId;
				echo $this->Form->label('period', __d('todo', 'Due date'), array('id' => $labelId));
			?>
		</dt>
		<dd>
			<?php
				$settings = array(
					'type' => 'text',
					'label' => false,
				);
				echo $this->Form->input('period', $settings);
			?>
		</dd>
		<dt>
			<?php
				$labelId = 'todo-progress-' . $frameId;
				echo $this->Form->label('progress', __d('todo', 'Progress'), array('id' => $labelId));
			?>
		</dt>
		<dd>
			<?php
				$settings = array(
					'type' => 'select',
					'options' => array(
						'0' => '0%',
						'10' => '10%',
						'20' => '20%',
						'30' => '30%',
						'40' => '40%',
						'50' => '50%',
						'60' => '60%',
						'70' => '70%',
						'80' => '80%',
						'90' => '90%',
						'100' => '100%',
					),
					'value' => '',
					'label' => false,
					'div' => false,
					'for' => $labelId,
				);
				echo $this->Form->input('progress', $settings);
			?>
		</dd>
		<dt>
			<?php
				$labelId = 'todo-category-id-' . $frameId;
				echo $this->Form->label('todo_category_id', __d('todo', 'Priority'), array('id' => $labelId));
			?>
		</dt>
		<dd>
			<?php
				$settings = array(
					'type' => 'select',
					'options' => array(
						'' => __d('todo', 'No category'),
					),
					'value' => '',
					'label' => false,
					'div' => false,
					'for' => $labelId,
				);
				echo $this->Form->input('todo_category_id', $settings);
			?>
		</dd>
	</dl>
</fieldset>
<?php
echo $this->Form->end();
?>
<div class="text-center">
	<button data-dismiss="modal" class="btn btn-default" type="button">
		<?php echo __d('todo', 'Cancel'); ?>
	</button>
	<button class="btn btn-primary" type="button">
		<?php echo __d('todo', 'Regist'); ?>
	</button>
</div>