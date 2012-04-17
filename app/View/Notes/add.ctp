<div class="notes form">
<?php echo $this->Form->create('Note');?>
	<fieldset>
		<legend><?php echo __('Add Note'); ?></legend>
	<?php
		echo $this->Form->input('date_entered');
		echo $this->Form->input('date_modified');
		echo $this->Form->input('modified_user_id');
		echo $this->Form->input('created_by');
		echo $this->Form->input('name');
		echo $this->Form->input('filename');
		echo $this->Form->input('file_mime_type');
		echo $this->Form->input('parent_type');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('contact_id');
		echo $this->Form->input('portal_flag');
		echo $this->Form->input('embed_flag');
		echo $this->Form->input('description');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Notes'), array('action' => 'index'));?></li>
	</ul>
</div>
