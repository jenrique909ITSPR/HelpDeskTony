<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Supervisor[]|\Cake\Collection\CollectionInterface $supervisors  */
?>

<div class="supervisors index">
    <h3><?= __('Supervisors') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Supervisor'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('branchgroup_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($supervisors as $supervisor): ?>
            <tr>
                <td><?= $this->Number->format($supervisor->id) ?></td>
                <td><?= $supervisor->has('user') ? $this->Html->link($supervisor->user->name, ['controller' => 'Users', 'action' => 'view', $supervisor->user->id]) : '' ?></td>
                <td><?= $supervisor->has('branchgroup') ? $this->Html->link($supervisor->branchgroup->name, ['controller' => 'Branchgroups', 'action' => 'view', $supervisor->branchgroup->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $supervisor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supervisor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supervisor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supervisor->id)]) ?>
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
        <li><?= $this->Html->link(__('New Supervisor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Branchgroups'), ['controller' => 'Branchgroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branchgroup'), ['controller' => 'Branchgroups', 'action' => 'add']) ?></li>
    </ul>
</nav>