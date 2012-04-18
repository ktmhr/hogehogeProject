<div class="contacts view">
<h2><?php  echo __('Contact');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Entered'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['date_entered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['date_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['modified_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assigned User Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['assigned_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salutation'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['salutation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['department']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Do Not Call'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['do_not_call']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Home'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['phone_home']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Mobile'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['phone_mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Work'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['phone_work']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Other'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['phone_other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Fax'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['phone_fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Address Street'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['primary_address_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Address City'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['primary_address_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Address State'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['primary_address_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Address Postalcode'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['primary_address_postalcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Address Country'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['primary_address_country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alt Address Street'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['alt_address_street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alt Address City'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['alt_address_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alt Address State'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['alt_address_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alt Address Postalcode'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['alt_address_postalcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alt Address Country'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['alt_address_country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assistant'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['assistant']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assistant Phone'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['assistant_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lead Source'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['lead_source']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reports To Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['reports_to_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthdate'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['birthdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Portal Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['portal_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Portal Active'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['portal_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Portal App'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['portal_app']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campaign Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['campaign_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact'), array('action' => 'edit', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), null, __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?> </li>
	</ul>
</div>
