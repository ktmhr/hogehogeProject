<div class="notes index">
	<h2><?php echo __('Notes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('date_entered');?></th>
			<th><?php echo $this->Paginator->sort('date_modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('filename');?></th>
			<th><?php echo $this->Paginator->sort('file_mime_type');?></th>
			<th><?php echo $this->Paginator->sort('parent_type');?></th>
			<th><?php echo $this->Paginator->sort('parent_id');?></th>
			<th><?php echo $this->Paginator->sort('contact_id');?></th>
			<th><?php echo $this->Paginator->sort('portal_flag');?></th>
			<th><?php echo $this->Paginator->sort('embed_flag');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('deleted');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($notes as $note): ?>
	<tr>
		<td><?php echo h($note['Note']['id']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['date_entered']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['date_modified']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['modified_user_id']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['name']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['filename']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['file_mime_type']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['parent_type']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['parent_id']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['contact_id']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['portal_flag']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['embed_flag']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['description']); ?>&nbsp;</td>
		<td><?php echo h($note['Note']['deleted']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $note['Note']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $note['Note']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $note['Note']['id']), null, __('Are you sure you want to delete # %s?', $note['Note']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Note'), array('action' => 'add')); ?></li>
	</ul>
</div>
