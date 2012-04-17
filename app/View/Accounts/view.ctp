<div class="accounts view">
<h2><?php  echo __('Account');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($account['Account']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($account['Account']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Entered'); ?></dt>
		<dd>
			<?php echo h($account['Account']['date_entered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($account['Account']['date_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Id'); ?></dt>
		<dd>
			<?php echo h($account['Account']['modified_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($account['Account']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($account['Account']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($account['Account']['deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assigned User Id'); ?></dt>
		<dd>
			<?php echo h($account['Account']['assigned_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Type'); ?></dt>
		<dd>
			<?php echo h($account['Account']['account_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Industry'); ?></dt>
		<dd>
			<?php echo h($account['Account']['industry']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Annual Revenue'); ?></dt>
		<dd>
			<?php echo h($account['Account']['annual_revenue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Fax'); ?></dt>
		<dd>
			<?php echo h($account['Account']['phone_fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Address Street'); ?></dt>
		<dd>
			<?php echo h($account['Account']['billing_address_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Address City'); ?></dt>
		<dd>
			<?php echo h($account['Account']['billing_address_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Address State'); ?></dt>
		<dd>
			<?php echo h($account['Account']['billing_address_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Address Postalcode'); ?></dt>
		<dd>
			<?php echo h($account['Account']['billing_address_postalcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Address Country'); ?></dt>
		<dd>
			<?php echo h($account['Account']['billing_address_country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($account['Account']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Office'); ?></dt>
		<dd>
			<?php echo h($account['Account']['phone_office']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Alternate'); ?></dt>
		<dd>
			<?php echo h($account['Account']['phone_alternate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($account['Account']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ownership'); ?></dt>
		<dd>
			<?php echo h($account['Account']['ownership']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employees'); ?></dt>
		<dd>
			<?php echo h($account['Account']['employees']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ticker Symbol'); ?></dt>
		<dd>
			<?php echo h($account['Account']['ticker_symbol']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Address Street'); ?></dt>
		<dd>
			<?php echo h($account['Account']['shipping_address_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Address City'); ?></dt>
		<dd>
			<?php echo h($account['Account']['shipping_address_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Address State'); ?></dt>
		<dd>
			<?php echo h($account['Account']['shipping_address_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Address Postalcode'); ?></dt>
		<dd>
			<?php echo h($account['Account']['shipping_address_postalcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Address Country'); ?></dt>
		<dd>
			<?php echo h($account['Account']['shipping_address_country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Id'); ?></dt>
		<dd>
			<?php echo h($account['Account']['parent_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sic Code'); ?></dt>
		<dd>
			<?php echo h($account['Account']['sic_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campaign Id'); ?></dt>
		<dd>
			<?php echo h($account['Account']['campaign_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account'), array('action' => 'edit', $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Account'), array('action' => 'delete', $account['Account']['id']), null, __('Are you sure you want to delete # %s?', $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('action' => 'add')); ?> </li>
	</ul>
</div>
