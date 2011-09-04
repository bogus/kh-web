<div class="counties form">
<?php echo $this->Form->create('County');?>
	<fieldset>
		<legend><?php __('Edit County'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('city_id');
		echo $this->Form->input('county_code');
		echo $this->Form->input('county_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('County.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('County.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Counties', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City', true), array('controller' => 'cities', 'action' => 'add')); ?> </li>
	</ul>
</div>