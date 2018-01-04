<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Positiontype[]|\Cake\Collection\CollectionInterface $positiontypes  */
?>

<div class="positiontypes index">
    <h3><?= __('Positiontypes') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Positiontype'), ['action' => 'add']) ?></li>
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
            <?php foreach ($positiontypes as $positiontype): ?>
            <tr>
                <td><?= $this->Number->format($positiontype->id) ?></td>
                <td><?= h($positiontype->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $positiontype->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $positiontype->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $positiontype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positiontype->id)]) ?>
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

