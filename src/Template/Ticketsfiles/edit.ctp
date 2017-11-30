<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketsfiles form">
	<h3><?= __('Edit Ticketsfile') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketsfiles'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($ticketsfile) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('ticketnote_id', ['options' => $ticketnotes, 'empty' => true]);
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
                ['action' => 'delete', $ticketsfile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketsfile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticketsfiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ticketnotes'), ['controller' => 'Ticketnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketnote'), ['controller' => 'Ticketnotes', 'action' => 'add']) ?></li>
    </ul>
</nav>