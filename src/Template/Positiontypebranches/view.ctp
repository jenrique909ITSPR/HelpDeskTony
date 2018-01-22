<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Positiontypebranch $positiontypebranch  */
?>

<div class="positiontypebranches view">
    <h3><?= h($positiontypebranch->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Positiontypebranch'), ['action' => 'delete', $positiontypebranch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positiontypebranch->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Positiontypebranch'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Positiontypebranches'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Positiontypebranch'), ['action' => 'edit', $positiontypebranch->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Branch') ?></th>
            <td><?= $positiontypebranch->has('branch') ? $this->Html->link($positiontypebranch->branch->NOMBRE, ['controller' => 'Branches', 'action' => 'view', $positiontypebranch->branch->SUCURSAL]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Positiontype') ?></th>
            <td><?= $positiontypebranch->has('positiontype') ? $this->Html->link($positiontypebranch->positiontype->name, ['controller' => 'Positiontypes', 'action' => 'view', $positiontypebranch->positiontype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($positiontypebranch->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qty') ?></th>
            <td><?= $this->Number->format($positiontypebranch->qty) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Positions') ?>">
        <h4><?= __('Related Positions') ?></h4>
        <?php if (!empty($positiontypebranch->positions)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Positiontypebranch Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($positiontypebranch->positions as $positions): ?>
            <tr>
                <td><?= h($positions->id) ?></td>
                <td><?= h($positions->positiontypebranch_id) ?></td>
                <td><?= h($positions->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Positions', 'action' => 'view', $positions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Positions', 'action' => 'edit', $positions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Positions', 'action' => 'delete', $positions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Itemcategories') ?>">
        <h4><?= __('Related Itemcategories') ?></h4>
        <?php if (!empty($positiontypebranch->itemcategories)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($positiontypebranch->itemcategories as $itemcategories): ?>
            <tr>
                <td><?= h($itemcategories->id) ?></td>
                <td><?= h($itemcategories->name) ?></td>
                <td><?= h($itemcategories->parent_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Itemcategories', 'action' => 'view', $itemcategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Itemcategories', 'action' => 'edit', $itemcategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Itemcategories', 'action' => 'delete', $itemcategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemcategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
