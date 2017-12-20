<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\TicketstatusesTickettype[]|\Cake\Collection\CollectionInterface $ticketstatusesTickettypes  */
?>

<div class="ticketstatusesTickettypes index">
    <h3><?= __('Ticketstatuses Tickettypes') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Ticketstatuses Tickettype'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticket_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tickettype_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ticketstatusesTickettypes as $ticketstatusesTickettype): ?>
            <tr>
                <td><?= $this->Number->format($ticketstatusesTickettype->id) ?></td>
                <td><?= $ticketstatusesTickettype->has('ticket_status') ? $this->Html->link($ticketstatusesTickettype->ticket_status->name, ['controller' => 'Ticketstatuses', 'action' => 'view', $ticketstatusesTickettype->ticket_status->id]) : '' ?></td>
                <td><?= $ticketstatusesTickettype->has('tickettype') ? $this->Html->link($ticketstatusesTickettype->tickettype->name, ['controller' => 'Tickettypes', 'action' => 'view', $ticketstatusesTickettype->tickettype->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticketstatusesTickettype->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticketstatusesTickettype->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticketstatusesTickettype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketstatusesTickettype->id)]) ?>
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
