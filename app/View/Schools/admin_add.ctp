<div class="schools form">
<?php echo $this->Form->create('School'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add School'); ?></legend>
	<?php
		echo $this->Form->input('bsn');
		echo $this->Form->input('meal');
		echo $this->Form->input('name');
		echo $this->Form->input('phonenumber');
		echo $this->Form->input('remarks');
		echo $this->Form->input('schoolnumber');
		echo $this->Form->input('wwwaddress');
		echo $this->Form->input('institutionprovider_id');
		echo $this->Form->input('address_id');
		echo $this->Form->input('Accessibilityequipment');
		echo $this->Form->input('Equipment');
		echo $this->Form->input('Foreignlanguage');
		echo $this->Form->input('Grade');
		echo $this->Form->input('Staff');
		echo $this->Form->input('Subject');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Schools'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Institutionproviders'), array('controller' => 'institutionproviders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institutionprovider'), array('controller' => 'institutionproviders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schoolbranches'), array('controller' => 'schoolbranches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schoolbranch'), array('controller' => 'schoolbranches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accessibilityequipments'), array('controller' => 'accessibilityequipments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accessibilityequipment'), array('controller' => 'accessibilityequipments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipment'), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment'), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foreignlanguages'), array('controller' => 'foreignlanguages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foreignlanguage'), array('controller' => 'foreignlanguages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Staffs'), array('controller' => 'staffs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects'), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
	</ul>
</div>
