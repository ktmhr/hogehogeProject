<div class="notes view">
<h2><?php  echo __('Note');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($note['Note']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Entered'); ?></dt>
		<dd>
			<?php echo h($note['Note']['date_entered']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Modified'); ?></dt>
		<dd>
			<?php echo h($note['Note']['date_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified User Id'); ?></dt>
		<dd>
			<?php echo h($note['Note']['modified_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($note['Note']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($note['Note']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($note['Note']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Mime Type'); ?></dt>
		<dd>
			<?php echo h($note['Note']['file_mime_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Type'); ?></dt>
		<dd>
			<?php echo h($note['Note']['parent_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Id'); ?></dt>
		<dd>
			<?php echo h($note['Note']['parent_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Id'); ?></dt>
		<dd>
			<?php echo h($note['Note']['contact_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Portal Flag'); ?></dt>
		<dd>
			<?php echo h($note['Note']['portal_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Embed Flag'); ?></dt>
		<dd>
			<?php echo h($note['Note']['embed_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($note['Note']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($note['Note']['deleted']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Note'), array('action' => 'edit', $note['Note']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Note'), array('action' => 'delete', $note['Note']['id']), null, __('Are you sure you want to delete # %s?', $note['Note']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Note'), array('action' => 'add')); ?> </li>
	</ul>
</div>
