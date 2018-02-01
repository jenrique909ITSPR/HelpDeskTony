<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Positiontypebranch[]|\Cake\Collection\CollectionInterface $positiontypebranches  */
?>

<div class="positiontypebranches index">
    <h3><?= __('Positiontypebranches') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Positiontypebranch'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('branch_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('positiontype_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('qty') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($positiontypebranches as $positiontypebranch): ?>
            <tr>
                <td><?= $this->Number->format($positiontypebranch->id) ?></td>
                <td><?= $positiontypebranch->has('branch') ? $this->Html->link($positiontypebranch->branch->NOMBRE, ['controller' => 'Branches', 'action' => 'view', $positiontypebranch->branch->SUCURSAL]) : '' ?></td>
                <td><?= $positiontypebranch->has('positiontype') ? $this->Html->link($positiontypebranch->positiontype->name, ['controller' => 'Positiontypes', 'action' => 'view', $positiontypebranch->positiontype->id]) : '' ?></td>
                <td><?= $this->Number->format($positiontypebranch->qty) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $positiontypebranch->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $positiontypebranch->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $positiontypebranch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positiontypebranch->id)]) ?>
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

