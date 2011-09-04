<div class="books form">
<?php echo $this->Form->create('Book');?>
	<fieldset>
		<legend><?php __('Add Book'); ?></legend>
	<?php
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
		<li><?php echo $this->Html->link(__('My Books', true), array('action' => 'userListBooks')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('My Profile', true), array('controller' => 'users', 'action' => 'myprofile')); ?> </li>
	</ul>
</div>