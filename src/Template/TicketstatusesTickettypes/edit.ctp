<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketstatusesTickettypes form">
	<h3><?= __('Edit Ticketstatuses Tickettype') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketstatuses Tickettypes'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($ticketstatusesTickettype) ?>
        <?php
            echo $this->Form->control('ticket_status_id', ['options' => $ticketStatuses]);
            echo $this->Form->control('tickettype_id', ['options' => $tickettypes]);
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ticketstatusesTickettype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketstatusesTickettype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticketstatuses Tickettypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Statuses'), ['controller' => 'Ticketstatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Status'), ['controller' => 'Ticketstatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickettypes'), ['controller' => 'Tickettypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tickettype'), ['controller' => 'Tickettypes', 'action' => 'add']) ?></li>
    </ul>
</nav>