<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketnotes form">
	<h3><?= __('Edit Ticketnote') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketnotes'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($ticketnote) ?>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->control('ticket_id', ['options' => $tickets, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('ticketnotestype_id', ['options' => $ticketnotestypes]);
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
                ['action' => 'delete', $ticketnote->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketnote->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticketnotes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketnotestypes'), ['controller' => 'Ticketnotestypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketnotestype'), ['controller' => 'Ticketnotestypes', 'action' => 'add']) ?></li>
    </ul>
</nav>