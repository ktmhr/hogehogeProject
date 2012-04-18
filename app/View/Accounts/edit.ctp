<div class="accounts form">
<?php echo $this->Form->create('Account');?>
	<fieldset>
		<legend><?php echo __('Edit Account'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('date_entered');
		echo $this->Form->input('date_modified');
		echo $this->Form->input('modified_user_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('description');
		echo $this->Form->input('deleted');
		echo $this->Form->input('assigned_user_id');
		echo $this->Form->input('account_type');
		echo $this->Form->input('industry');
		echo $this->Form->input('annual_revenue');
		echo $this->Form->input('phone_fax');
		echo $this->Form->input('billing_address_street');
		echo $this->Form->input('billing_address_city');
		echo $this->Form->input('billing_address_state');
		echo $this->Form->input('billing_address_postalcode');
		echo $this->Form->input('billing_address_country');
		echo $this->Form->input('rating');
		echo $this->Form->input('phone_office');
		echo $this->Form->input('phone_alternate');
		echo $this->Form->input('website');
		echo $this->Form->input('ownership');
		echo $this->Form->input('employees');
		echo $this->Form->input('ticker_symbol');
		echo $this->Form->input('shipping_address_street');
		echo $this->Form->input('shipping_address_city');
		echo $this->Form->input('shipping_address_state');
		echo $this->Form->input('shipping_address_postalcode');
		echo $this->Form->input('shipping_address_country');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('sic_code');
		echo $this->Form->input('campaign_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Account.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Account.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('action' => 'index'));?></li>
	</ul>
</div>
