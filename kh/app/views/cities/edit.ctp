<div class="cities form">
<?php echo $this->Form->create('City');?>
	<fieldset>
		<legend><?php __('Edit City'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('city_code');
		echo $this->Form->input('city_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('City.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('City.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Counties', true), array('controller' => 'counties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New County', true), array('controller' => 'counties', 'action' => 'add')); ?> </li>
	</ul>
</div>