<div class="accessibilityequipments form">
<?php echo $this->Form->create('CSV', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Import school data'); ?></legend>
	<?php
                echo $this->Form->file('submittedFile', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Import')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

	</ul>
</div>
