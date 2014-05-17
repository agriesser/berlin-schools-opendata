<div class="accessibilityequipments form">
<?php echo $this->Form->create('Accessibilityequipment'); ?>
	<fieldset>
		<legend><?php echo __('Add Accessibilityequipment'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('School');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Accessibilityequipments'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
	</ul>
</div>
