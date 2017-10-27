<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Positionbranch[]|\Cake\Collection\CollectionInterface $positionbranches
  */
?>

<div class="positionbranches index">
    <h3><?= __('Positionbranches') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Positionbranch'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('branch_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($positionbranches as $positionbranch): ?>
            <tr>
                <td><?= $this->Number->format($positionbranch->id) ?></td>
                <td><?= $positionbranch->has('branch') ? $this->Html->link($positionbranch->branch->name, ['controller' => 'Branches', 'action' => 'view', $positionbranch->branch->id]) : '' ?></td>
                <td><?= $positionbranch->has('position') ? $this->Html->link($positionbranch->position->name, ['controller' => 'Positions', 'action' => 'view', $positionbranch->position->id]) : '' ?></td>
                <td><?= h($positionbranch->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $positionbranch->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $positionbranch->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $positionbranch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positionbranch->id)]) ?>
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

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Positionbranch'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Branches'), ['controller' => 'Branches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>