<div class="books index">
	<h2><?php __('Books');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('author_first_name');?></th>
			<th><?php echo $this->Paginator->sort('author_last_name');?></th>
			<th><?php echo $this->Paginator->sort('isbn');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($books as $book):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($book['User']['first_name'].' '.$book['User']['last_name'], array('controller' => 'users', 'action' => 'view', $book['User']['id'])); ?>
		</td>
		<td><?php echo $book['Book']['name']; ?>&nbsp;</td>
		<td><?php echo $book['Book']['author_first_name']; ?>&nbsp;</td>
		<td><?php echo $book['Book']['author_last_name']; ?>&nbsp;</td>
		<td><?php echo $book['Book']['isbn']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $book['Book']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Add New Book', true), array('action' => 'userAddBook')); ?></li>
	</ul>
</div>