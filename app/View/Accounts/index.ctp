<div class="accounts index">
	<h2><?php echo __('Accounts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('date_entered');?></th>
			<th><?php echo $this->Paginator->sort('date_modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('deleted');?></th>
			<th><?php echo $this->Paginator->sort('assigned_user_id');?></th>
			<th><?php echo $this->Paginator->sort('account_type');?></th>
			<th><?php echo $this->Paginator->sort('industry');?></th>
			<th><?php echo $this->Paginator->sort('annual_revenue');?></th>
			<th><?php echo $this->Paginator->sort('phone_fax');?></th>
			<th><?php echo $this->Paginator->sort('billing_address_street');?></th>
			<th><?php echo $this->Paginator->sort('billing_address_city');?></th>
			<th><?php echo $this->Paginator->sort('billing_address_state');?></th>
			<th><?php echo $this->Paginator->sort('billing_address_postalcode');?></th>
			<th><?php echo $this->Paginator->sort('billing_address_country');?></th>
			<th><?php echo $this->Paginator->sort('rating');?></th>
			<th><?php echo $this->Paginator->sort('phone_office');?></th>
			<th><?php echo $this->Paginator->sort('phone_alternate');?></th>
			<th><?php echo $this->Paginator->sort('website');?></th>
			<th><?php echo $this->Paginator->sort('ownership');?></th>
			<th><?php echo $this->Paginator->sort('employees');?></th>
			<th><?php echo $this->Paginator->sort('ticker_symbol');?></th>
			<th><?php echo $this->Paginator->sort('shipping_address_street');?></th>
			<th><?php echo $this->Paginator->sort('shipping_address_city');?></th>
			<th><?php echo $this->Paginator->sort('shipping_address_state');?></th>
			<th><?php echo $this->Paginator->sort('shipping_address_postalcode');?></th>
			<th><?php echo $this->Paginator->sort('shipping_address_country');?></th>
			<th><?php echo $this->Paginator->sort('parent_id');?></th>
			<th><?php echo $this->Paginator->sort('sic_code');?></th>
			<th><?php echo $this->Paginator->sort('campaign_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($accounts as $account): ?>
	<tr>
		<td><?php echo h($account['Account']['id']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['name']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['date_entered']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['date_modified']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['modified_user_id']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['description']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['deleted']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['assigned_user_id']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['account_type']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['industry']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['annual_revenue']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['phone_fax']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['billing_address_street']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['billing_address_city']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['billing_address_state']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['billing_address_postalcode']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['billing_address_country']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['rating']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['phone_office']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['phone_alternate']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['website']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['ownership']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['employees']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['ticker_symbol']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['shipping_address_street']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['shipping_address_city']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['shipping_address_state']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['shipping_address_postalcode']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['shipping_address_country']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['parent_id']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['sic_code']); ?>&nbsp;</td>
		<td><?php echo h($account['Account']['campaign_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $account['Account']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $account['Account']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $account['Account']['id']), null, __('Are you sure you want to delete # %s?', $account['Account']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Account'), array('action' => 'add')); ?></li>
	</ul>
</div>
