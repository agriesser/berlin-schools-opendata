<div class="schools view">
<h2><?php echo __('School'); ?></h2>
        <?php echo $this->Map->map(array(
            'style' => 'margin: 0; float: right; width: 400px; height: 400px;',
            'marker_lon' => $school['Address']['longitude'],
            'marker_lat' => $school['Address']['latitude'],
            )) ?>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($school['School']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bsn'); ?></dt>
		<dd>
			<?php echo h($school['School']['bsn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Meal'); ?></dt>
		<dd>
			<?php echo h($school['School']['meal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($school['School']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phonenumber'); ?></dt>
		<dd>
			<?php echo h($school['School']['phonenumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($school['School']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schoolnumber'); ?></dt>
		<dd>
			<?php echo h($school['School']['schoolnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wwwaddress'); ?></dt>
		<dd>
			<?php echo h($school['School']['wwwaddress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Institutionprovider'); ?></dt>
		<dd>
			<?php echo $this->Html->link($school['Institutionprovider']['description'], array('controller' => 'institutionproviders', 'action' => 'view', $school['Institutionprovider']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($school['Address']['street'], array('controller' => 'addresses', 'action' => 'view', $school['Address']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit School'), array('action' => 'edit', $school['School']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete School'), array('action' => 'delete', $school['School']['id']), array(), __('Are you sure you want to delete # %s?', $school['School']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schools'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New School'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Schoolbranches'); ?></h3>
	<?php if (!empty($school['Schoolbranch'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Duallearningdecription'); ?></th>
		<th><?php echo __('School Id'); ?></th>
		<th><?php echo __('Schooltype Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($school['Schoolbranch'] as $schoolbranch): ?>
		<tr>
			<td><?php echo $schoolbranch['id']; ?></td>
			<td><?php echo $schoolbranch['duallearningdecription']; ?></td>
			<td><?php echo $schoolbranch['school_id']; ?></td>
			<td><?php echo $schoolbranch['schooltype_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'schoolbranches', 'action' => 'view', $schoolbranch['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'schoolbranches', 'action' => 'edit', $schoolbranch['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'schoolbranches', 'action' => 'delete', $schoolbranch['id']), array(), __('Are you sure you want to delete # %s?', $schoolbranch['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Schoolbranch'), array('controller' => 'schoolbranches', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Accessibilityequipments'); ?></h3>
	<?php if (!empty($school['Accessibilityequipment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($school['Accessibilityequipment'] as $accessibilityequipment): ?>
		<tr>
			<td><?php echo $accessibilityequipment['id']; ?></td>
			<td><?php echo $accessibilityequipment['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'accessibilityequipments', 'action' => 'view', $accessibilityequipment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'accessibilityequipments', 'action' => 'edit', $accessibilityequipment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'accessibilityequipments', 'action' => 'delete', $accessibilityequipment['id']), array(), __('Are you sure you want to delete # %s?', $accessibilityequipment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Accessibilityequipment'), array('controller' => 'accessibilityequipments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Equipment'); ?></h3>
	<?php if (!empty($school['Equipment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($school['Equipment'] as $equipment): ?>
		<tr>
			<td><?php echo $equipment['id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'equipment', 'action' => 'view', $equipment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'equipment', 'action' => 'edit', $equipment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'equipment', 'action' => 'delete', $equipment['id']), array(), __('Are you sure you want to delete # %s?', $equipment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Equipment'), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Foreignlanguages'); ?></h3>
	<?php if (!empty($school['Foreignlanguage'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($school['Foreignlanguage'] as $foreignlanguage): ?>
		<tr>
			<td><?php echo $foreignlanguage['id']; ?></td>
			<td><?php echo $foreignlanguage['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'foreignlanguages', 'action' => 'view', $foreignlanguage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'foreignlanguages', 'action' => 'edit', $foreignlanguage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'foreignlanguages', 'action' => 'delete', $foreignlanguage['id']), array(), __('Are you sure you want to delete # %s?', $foreignlanguage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Foreignlanguage'), array('controller' => 'foreignlanguages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Grades'); ?></h3>
	<?php if (!empty($school['Grade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Boys'); ?></th>
		<th><?php echo __('Boysforeignnativelanguage'); ?></th>
		<th><?php echo __('Girls'); ?></th>
		<th><?php echo __('Girlsforeignnativelanguage'); ?></th>
		<th><?php echo __('Grade'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($school['Grade'] as $grade): ?>
		<tr>
			<td><?php echo $grade['id']; ?></td>
			<td><?php echo $grade['boys']; ?></td>
			<td><?php echo $grade['boysforeignnativelanguage']; ?></td>
			<td><?php echo $grade['girls']; ?></td>
			<td><?php echo $grade['girlsforeignnativelanguage']; ?></td>
			<td><?php echo $grade['grade']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grades', 'action' => 'view', $grade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grades', 'action' => 'edit', $grade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grades', 'action' => 'delete', $grade['id']), array(), __('Are you sure you want to delete # %s?', $grade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Staffs'); ?></h3>
	<?php if (!empty($school['Staff'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Count'); ?></th>
		<th><?php echo __('Jobtitle Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($school['Staff'] as $staff): ?>
		<tr>
			<td><?php echo $staff['id']; ?></td>
			<td><?php echo $staff['count']; ?></td>
			<td><?php echo $staff['jobtitle_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'staffs', 'action' => 'view', $staff['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'staffs', 'action' => 'edit', $staff['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'staffs', 'action' => 'delete', $staff['id']), array(), __('Are you sure you want to delete # %s?', $staff['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Staff'), array('controller' => 'staffs', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Subjects'); ?></h3>
	<?php if (!empty($school['Subject'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($school['Subject'] as $subject): ?>
		<tr>
			<td><?php echo $subject['id']; ?></td>
			<td><?php echo $subject['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'subjects', 'action' => 'view', $subject['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'subjects', 'action' => 'edit', $subject['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'subjects', 'action' => 'delete', $subject['id']), aray(), __('Are you sure you want to delete # %s?', $subject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subject'), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
