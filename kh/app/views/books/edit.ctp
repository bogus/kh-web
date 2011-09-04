<div class="books form">
<?php echo $this->Form->create('Book');?>
	<fieldset>
		<legend><?php __('Edit Book'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('author_first_name');
		echo $this->Form->input('author_last_name');
		echo $this->Form->input('isbn');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Book.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Book.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Books', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Add New Book', true), array('action' => 'userAddBook')); ?></li>
	</ul>
</div>