<div class="contacts form">
<?php echo $this->Form->create('Contact');?>
	<fieldset>
		<legend><?php echo __('Add Contact'); ?></legend>
	<?php
		echo $this->Form->input('date_entered');
		echo $this->Form->input('date_modified');
		echo $this->Form->input('modified_user_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('description');
		echo $this->Form->input('deleted');
		echo $this->Form->input('assigned_user_id');
		echo $this->Form->input('salutation');
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('title');
		echo $this->Form->input('department');
		echo $this->Form->input('do_not_call');
		echo $this->Form->input('phone_home');
		echo $this->Form->input('phone_mobile');
		echo $this->Form->input('phone_work');
		echo $this->Form->input('phone_other');
		echo $this->Form->input('phone_fax');
		echo $this->Form->input('primary_address_street');
		echo $this->Form->input('primary_address_city');
		echo $this->Form->input('primary_address_state');
		echo $this->Form->input('primary_address_postalcode');
		echo $this->Form->input('primary_address_country');
		echo $this->Form->input('alt_address_street');
		echo $this->Form->input('alt_address_city');
		echo $this->Form->input('alt_address_state');
		echo $this->Form->input('alt_address_postalcode');
		echo $this->Form->input('alt_address_country');
		echo $this->Form->input('assistant');
		echo $this->Form->input('assistant_phone');
		echo $this->Form->input('lead_source');
		echo $this->Form->input('reports_to_id');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('portal_name');
		echo $this->Form->input('portal_active');
		echo $this->Form->input('portal_app');
		echo $this->Form->input('campaign_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index'));?></li>
	</ul>
</div>
