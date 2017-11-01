<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketmarked $ticketmarked  */
?>

<div class="ticketmarkeds view">
    <h3><?= h($ticketmarked->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Ticketmarked'), ['action' => 'delete', $ticketmarked->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketmarked->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Ticketmarked'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Ticketmarkeds'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Ticketmarked'), ['action' => 'edit', $ticketmarked->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ticketmarked->has('user') ? $this->Html->link($ticketmarked->user->name, ['controller' => 'Users', 'action' => 'view', $ticketmarked->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket') ?></th>
            <td><?= $ticketmarked->has('ticket') ? $this->Html->link($ticketmarked->ticket->title, ['controller' => 'Tickets', 'action' => 'view', $ticketmarked->ticket->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketmarked->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ticketmarked'), ['action' => 'edit', $ticketmarked->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ticketmarked'), ['action' => 'delete', $ticketmarked->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketmarked->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ticketmarkeds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticketmarked'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</nav>