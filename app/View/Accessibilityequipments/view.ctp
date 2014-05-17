<div class="accessibilityequipments view">
<h2><?php echo __('Accessibilityequipment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accessibilityequipment['Accessibilityequipment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($accessibilityequipment['Accessibilityequipment']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accessibilityequipment'), array('action' => 'edit', $accessibilityequipment['Accessibilityequipment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accessibilityequipment'), array('action' => 'delete', $accessibilityequipment['Accessibilityequipment']['id']), null, __('Are you sure you want to delete # %s?', $accessibilityequipment['Accessibilityequipment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accessibilityequipments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accessibilityequipment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Schools'); ?></h3>
	<?php if (!empty($accessibilityequipment['School'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Meal'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Phonenumber'); ?></th>
		<th><?php echo __('Remarks'); ?></th>
		<th><?php echo __('Schoolnumber'); ?></th>
		<th><?php echo __('Wwwaddress'); ?></th>
		<th><?php echo __('Institutionprovider Id'); ?></th>
		<th><?php echo __('Address Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($accessibilityequipment['School'] as $school): ?>
		<tr>
			<td><?php echo $school['id']; ?></td>
			<td><?php echo $school['meal']; ?></td>
			<td><?php echo $school['name']; ?></td>
			<td><?php echo $school['phonenumber']; ?></td>
			<td><?php echo $school['remarks']; ?></td>
			<td><?php echo $school['schoolnumber']; ?></td>
			<td><?php echo $school['wwwaddress']; ?></td>
			<td><?php echo $school['institutionprovider_id']; ?></td>
			<td><?php echo $school['address_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'schools', 'action' => 'view', $school['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'schools', 'action' => 'edit', $school['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'schools', 'action' => 'delete', $school['id']), null, __('Are you sure you want to delete # %s?', $school['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
