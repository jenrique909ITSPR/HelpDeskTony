<?php
/**
  * @var \App\View\AppView $this
  * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $insureds  */
?>

<div class="insureds index">
    <h3><?= __('Insureds') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Insured'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($insureds as $insured): ?>
            <tr>
                <td><?= $this->Number->format($insured->id) ?></td>
                <td><?= h($insured->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $insured->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $insured->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $insured->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insured->id)]) ?>
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
        <li><?= $this->Html->link(__('New Insured'), ['action' => 'add']) ?></li>
    </ul>
</nav>