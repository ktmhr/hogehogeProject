<div class="contacts index">
	<h2><?php echo __('Contacts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('date_entered');?></th>
			<th><?php echo $this->Paginator->sort('date_modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('deleted');?></th>
			<th><?php echo $this->Paginator->sort('assigned_user_id');?></th>
			<th><?php echo $this->Paginator->sort('salutation');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('department');?></th>
			<th><?php echo $this->Paginator->sort('do_not_call');?></th>
			<th><?php echo $this->Paginator->sort('phone_home');?></th>
			<th><?php echo $this->Paginator->sort('phone_mobile');?></th>
			<th><?php echo $this->Paginator->sort('phone_work');?></th>
			<th><?php echo $this->Paginator->sort('phone_other');?></th>
			<th><?php echo $this->Paginator->sort('phone_fax');?></th>
			<th><?php echo $this->Paginator->sort('primary_address_street');?></th>
			<th><?php echo $this->Paginator->sort('primary_address_city');?></th>
			<th><?php echo $this->Paginator->sort('primary_address_state');?></th>
			<th><?php echo $this->Paginator->sort('primary_address_postalcode');?></th>
			<th><?php echo $this->Paginator->sort('primary_address_country');?></th>
			<th><?php echo $this->Paginator->sort('alt_address_street');?></th>
			<th><?php echo $this->Paginator->sort('alt_address_city');?></th>
			<th><?php echo $this->Paginator->sort('alt_address_state');?></th>
			<th><?php echo $this->Paginator->sort('alt_address_postalcode');?></th>
			<th><?php echo $this->Paginator->sort('alt_address_country');?></th>
			<th><?php echo $this->Paginator->sort('assistant');?></th>
			<th><?php echo $this->Paginator->sort('assistant_phone');?></th>
			<th><?php echo $this->Paginator->sort('lead_source');?></th>
			<th><?php echo $this->Paginator->sort('reports_to_id');?></th>
			<th><?php echo $this->Paginator->sort('birthdate');?></th>
			<th><?php echo $this->Paginator->sort('portal_name');?></th>
			<th><?php echo $this->Paginator->sort('portal_active');?></th>
			<th><?php echo $this->Paginator->sort('portal_app');?></th>
			<th><?php echo $this->Paginator->sort('campaign_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo h($contact['Contact']['id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['date_entered']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['date_modified']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['modified_user_id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['description']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['deleted']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['assigned_user_id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['salutation']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['title']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['department']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['do_not_call']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone_home']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone_mobile']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone_work']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone_other']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['phone_fax']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['primary_address_street']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['primary_address_city']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['primary_address_state']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['primary_address_postalcode']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['primary_address_country']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['alt_address_street']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['alt_address_city']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['alt_address_state']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['alt_address_postalcode']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['alt_address_country']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['assistant']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['assistant_phone']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['lead_source']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['reports_to_id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['birthdate']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['portal_name']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['portal_active']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['portal_app']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['campaign_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contact['Contact']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contact['Contact']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contact['Contact']['id']), null, __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?></li>
	</ul>
</div>
