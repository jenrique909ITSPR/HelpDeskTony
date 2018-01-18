<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\PositiontypebranchesItemcategory $positiontypebranchesItemcategory  */
?>

<div class="positiontypebranchesItemcategories view">
    <h3><?= h($positiontypebranchesItemcategory->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Positiontypebranches Itemcategory'), ['action' => 'delete', $positiontypebranchesItemcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positiontypebranchesItemcategory->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Positiontypebranches Itemcategory'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Positiontypebranches Itemcategories'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Positiontypebranches Itemcategory'), ['action' => 'edit', $positiontypebranchesItemcategory->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Itemcategory') ?></th>
            <td><?= $positiontypebranchesItemcategory->has('itemcategory') ? $this->Html->link($positiontypebranchesItemcategory->itemcategory->name, ['controller' => 'Itemcategories', 'action' => 'view', $positiontypebranchesItemcategory->itemcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($positiontypebranchesItemcategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Positiontypebranch Id') ?></th>
            <td><?= $this->Number->format($positiontypebranchesItemcategory->positiontypebranch_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qty') ?></th>
            <td><?= $this->Number->format($positiontypebranchesItemcategory->qty) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>
