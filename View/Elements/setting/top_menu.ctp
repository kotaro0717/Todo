<p class='text-right'>
	<?php if ($blockEditable): ?>
		<button class='btn btn-default'
			ng-click='openBlockSetting(<?php echo (int)$frameId; ?>)'
			ng-disabled='sendLock'
		><span class='glyphicon glyphicon-cog'> <?php echo __d('todo', 'Block setting'); ?></span></button>
	<?php endif; ?>

	<?php if ($contentEditable): ?>
		<button class='btn btn-primary'
			ng-click='getEditor(<?php echo (int)$frameId; ?>)'
			ng-disabled='sendLock'
			><span class='glyphicon glyphicon-pencil'> <?php echo __d('todo', 'Edit'); ?></span></button>
	<?php endif; ?>
</p>
