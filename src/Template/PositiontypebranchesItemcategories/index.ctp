<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\PositiontypebranchesItemcategory[]|\Cake\Collection\CollectionInterface $positiontypebranchesItemcategories  */
?>

<div class="positiontypebranchesItemcategories index">
    <h3><?= __('Positiontypebranches Itemcategories') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Positiontypebranches Itemcategory'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('positiontypebranch_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('itemcategory_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qty') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($positiontypebranchesItemcategories as $positiontypebranchesItemcategory): ?>
            <tr>
                <td><?= $this->Number->format($positiontypebranchesItemcategory->id) ?></td>
                <td><?= $this->Number->format($positiontypebranchesItemcategory->positiontypebranch_id) ?></td>
                <td><?= $positiontypebranchesItemcategory->has('itemcategory') ? $this->Html->link($positiontypebranchesItemcategory->itemcategory->name, ['controller' => 'Itemcategories', 'action' => 'view', $positiontypebranchesItemcategory->itemcategory->id]) : '' ?></td>
                <td><?= $this->Number->format($positiontypebranchesItemcategory->qty) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $positiontypebranchesItemcategory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $positiontypebranchesItemcategory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $positiontypebranchesItemcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positiontypebranchesItemcategory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
