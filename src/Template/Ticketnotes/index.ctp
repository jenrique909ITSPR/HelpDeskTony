<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketnote[]|\Cake\Collection\CollectionInterface $ticketnotes  */
?>

<div class="ticketnotes index">
    <h3><?= __('Ticketnotes') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Ticketnote'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticket_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticketnotestype_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ticketnotes as $ticketnote): ?>
            <tr>
                <td><?= $this->Number->format($ticketnote->id) ?></td>
                <td><?= $ticketnote->has('ticket') ? $this->Html->link($ticketnote->ticket->title, ['controller' => 'Tickets', 'action' => 'view', $ticketnote->ticket->id]) : '' ?></td>
                <td><?= $ticketnote->has('user') ? $this->Html->link($ticketnote->user->name, ['controller' => 'Users', 'action' => 'view', $ticketnote->user->id]) : '' ?></td>
                <td><?= h($ticketnote->created) ?></td>
                <td><?= $ticketnote->has('ticketnotestype') ? $this->Html->link($ticketnote->ticketnotestype->name, ['controller' => 'Ticketnotestypes', 'action' => 'view', $ticketnote->ticketnotestype->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticketnote->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketnote->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketnote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketnote->id)]) ?>
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
