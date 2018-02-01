<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Branch[]|\Cake\Collection\CollectionInterface $branches  */
?>

<div class="branches index">
    <h3><?= __('Branches') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Branch'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('branchgroup_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cia') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($branches as $branch): ?>
            <tr>
                <td><?= $this->Number->format($branch->SUCURSAL) ?></td>
                <td><?= h($branch->NOMBRE) ?></td>
                <td><?= $branch->has('branchgroup') ? $this->Html->link($branch->branchgroup->name, ['controller' => 'Branchgroups', 'action' => 'view', $branch->branchgroup->id]) : '' ?></td>
                <td><?= $branch->has('company') ? $this->Html->link($branch->company->Nombre, ['controller' => 'Branchgroups', 'action' => 'view', $branch->company->Cia]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $branch->SUCURSAL]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $branch->SUCURSAL]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $branch->SUCURSAL], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->SUCURSAL)]) ?>
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
