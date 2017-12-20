<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Stock $stock
  */
?>

<div class="stocks view">
    <h3><?= h($stock->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Stock'), ['action' => 'delete', $stock->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stock->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Stock'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Stocks'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Stock'), ['action' => 'edit', $stock->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Warehouse') ?></th>
            <td><?= $stock->has('warehouse') ? $this->Html->link($stock->warehouse->name, ['controller' => 'Warehouses', 'action' => 'view', $stock->warehouse->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $stock->has('item') ? $this->Html->link($stock->item->name, ['controller' => 'Items', 'action' => 'view', $stock->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($stock->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reorder') ?></th>
            <td><?= $this->Number->format($stock->reorder) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>
