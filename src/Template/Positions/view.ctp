<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Position $position  */
?>

<div class="positions view">
    <h3><?= h($position->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Position'), ['action' => 'delete', $position->id], ['confirm' => __('Are you sure you want to delete # {0}?', $position->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Position'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Positions'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Position'), ['action' => 'edit', $position->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Positiontypebranch') ?></th>
            <td><?= $position->has('positiontypebranch') ? $this->Html->link($position->positiontypebranch->id, ['controller' => 'Positiontypebranches', 'action' => 'view', $position->positiontypebranch->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($position->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($position->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>

