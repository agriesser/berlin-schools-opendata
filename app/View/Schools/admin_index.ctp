<div class="schools index">
	<h2><?php echo __('Schools'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('bsn'); ?></th>
			<th><?php echo $this->Paginator->sort('meal'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('phonenumber'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('schoolnumber'); ?></th>
			<th><?php echo $this->Paginator->sort('wwwaddress'); ?></th>
			<th><?php echo $this->Paginator->sort('institutionprovider_id'); ?></th>
			<th><?php echo $this->Paginator->sort('address_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($schools as $school): ?>
	<tr>
		<td><?php echo h($school['School']['id']); ?>&nbsp;</td>
		<td><?php echo h($school['School']['bsn']); ?>&nbsp;</td>
		<td><?php echo h($school['School']['meal']); ?>&nbsp;</td>
		<td><?php echo h($school['School']['name']); ?>&nbsp;</td>
		<td><?php echo h($school['School']['phonenumber']); ?>&nbsp;</td>
		<td><?php echo h($school['School']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($school['School']['schoolnumber']); ?>&nbsp;</td>
		<td><?php echo h($school['School']['wwwaddress']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($school['Institutionprovider']['description'], array('controller' => 'institutionproviders', 'action' => 'view', $school['Institutionprovider']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($school['Address']['street'], array('controller' => 'addresses', 'action' => 'view', $school['Address']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $school['School']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $school['School']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $school['School']['id']), array(), __('Are you sure you want to delete # %s?', $school['School']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New School'), array('action' => 'add')); ?></li>
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
