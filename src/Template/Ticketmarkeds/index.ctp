<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketmarked[]|\Cake\Collection\CollectionInterface $ticketmarkeds  */
?>

<div class="ticketmarkeds index">
    <h3><?= __('Ticketmarkeds') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Ticketmarked'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticket_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ticketmarkeds as $ticketmarked): ?>
            <tr>
                <td><?= $this->Number->format($ticketmarked->id) ?></td>
                <td><?= $ticketmarked->has('user') ? $this->Html->link($ticketmarked->user->name, ['controller' => 'Users', 'action' => 'view', $ticketmarked->user->id]) : '' ?></td>
                <td><?= $ticketmarked->has('ticket') ? $this->Html->link($ticketmarked->ticket->title, ['controller' => 'Tickets', 'action' => 'view', $ticketmarked->ticket->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticketmarked->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketmarked->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketmarked->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketmarked->id)]) ?>
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
