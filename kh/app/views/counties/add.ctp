<div class="counties form">
<?php echo $this->Form->create('County');?>
	<fieldset>
		<legend><?php __('Add County'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Counties', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City', true), array('controller' => 'cities', 'action' => 'add')); ?> </li>
	</ul>
</div>