<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\TicketstatusesTickettype $ticketstatusesTickettype  */
?>

<div class="ticketstatusesTickettypes view">
    <h3><?= h($ticketstatusesTickettype->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Ticketstatuses Tickettype'), ['action' => 'delete', $ticketstatusesTickettype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketstatusesTickettype->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Ticketstatuses Tickettype'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Ticketstatuses Tickettypes'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Ticketstatuses Tickettype'), ['action' => 'edit', $ticketstatusesTickettype->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ticket Status') ?></th>
            <td><?= $ticketstatusesTickettype->has('ticket_status') ? $this->Html->link($ticketstatusesTickettype->ticket_status->name, ['controller' => 'Ticketstatuses', 'action' => 'view', $ticketstatusesTickettype->ticket_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tickettype') ?></th>
            <td><?= $ticketstatusesTickettype->has('tickettype') ? $this->Html->link($ticketstatusesTickettype->tickettype->name, ['controller' => 'Tickettypes', 'action' => 'view', $ticketstatusesTickettype->tickettype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketstatusesTickettype->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>
