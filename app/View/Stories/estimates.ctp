	<?php $sum = array(); ?>
	<?php foreach ($proejcts as $proejct): ?>
	<h2><?php echo __('Stories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>id</th>
			<th>project_id</th>
			<th>story</th>
			<th>estimate</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>

	<?php foreach ($proejct['Story'] as $story): ?>
	

	<tr>
		<td><?php echo h($story['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($story['Project']['desc'], array('controller' => 'projects', 'action' => 'view', $story['Project']['id'])); ?>
		</td>
		<td><?php echo  h($story['story']);  ?></td>
		<td><?php echo h($story['User'][0]['StoriesUser']['estimate']); ?>&nbsp;</td>
		<?php $sum[]  = $story['User'][0]['StoriesUser']['estimate']; ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $story['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $story['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $story['id']), null, __('Are you sure you want to delete # %s?', $story['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php endforeach;?>
<div>
Your project has <?php echo $developers ?> give that all developers work full time your proejct 
(totaling <?php echo array_sum($sum)?>) should be completed in  <?php echo (array_sum($sum) / $developers) *5 ?> weeks 
given that initial velocity is 5.
 
</div>