<div class="addresses view">
<h2><?php echo __('Address'); ?></h2>
        <?php echo $this->Map->map(array(
            'style' => 'margin: 0; float: right; width: 400px; height: 400px;',
            'marker_lon' => $address['Address']['longitude'],
            'marker_lat' => $address['Address']['latitude'],
            )) ?>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($address['Address']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geolength'); ?></dt>
		<dd>
			<?php echo h($address['Address']['longitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geowidth'); ?></dt>
		<dd>
			<?php echo h($address['Address']['latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($address['Address']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode'); ?></dt>
		<dd>
			<?php echo h($address['Address']['zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo $this->Html->link($address['District']['name'], array('controller' => 'districts', 'action' => 'view', $address['District']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Address'), array('action' => 'edit', $address['Address']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Address'), array('action' => 'delete', $address['Address']['id']), array(), __('Are you sure you want to delete # %s?', $address['Address']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('controller' => 'schools', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Schools'); ?></h3>
	<?php if (!empty($address['School'])): ?>
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
	<?php foreach ($address['School'] as $school): ?>
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
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'schools', 'action' => 'delete', $school['id']), array(), __('Are you sure you want to delete # %s?', $school['id'])); ?>
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
