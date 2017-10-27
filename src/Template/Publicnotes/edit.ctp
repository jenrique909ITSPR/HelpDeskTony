<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="publicnotes form">
	<h3><?= __('Edit Publicnote') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Publicnotes'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($publicnote) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('ticket_id', ['options' => $tickets, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users]);
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
                ['action' => 'delete', $publicnote->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $publicnote->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Publicnotes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>