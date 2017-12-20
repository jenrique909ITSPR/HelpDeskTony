<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketnote $ticketnote  */
?>

<div class="ticketnotes view">
    <h3><?= h($ticketnote->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Ticketnote'), ['action' => 'delete', $ticketnote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketnote->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Ticketnote'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Ticketnotes'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Ticketnote'), ['action' => 'edit', $ticketnote->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ticket') ?></th>
            <td><?= $ticketnote->has('ticket') ? $this->Html->link($ticketnote->ticket->title, ['controller' => 'Tickets', 'action' => 'view', $ticketnote->ticket->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ticketnote->has('user') ? $this->Html->link($ticketnote->user->name, ['controller' => 'Users', 'action' => 'view', $ticketnote->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticketnotestype') ?></th>
            <td><?= $ticketnote->has('ticketnotestype') ? $this->Html->link($ticketnote->ticketnotestype->name, ['controller' => 'Ticketnotestypes', 'action' => 'view', $ticketnote->ticketnotestype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketnote->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ticketnote->created) ?></td>
        </tr>
    </table>
	</div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($ticketnote->description)); ?>
    </div>
<div class="easyui-tabs">
</div>
</div>
