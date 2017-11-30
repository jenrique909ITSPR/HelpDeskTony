<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketnotestypes form">
	<h3><?= __('Add Ticketnotestype') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketnotestypes'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($ticketnotestype) ?>
        <?php
            echo $this->Form->control('name');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ticketnotestypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ticketnotes'), ['controller' => 'Ticketnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketnote'), ['controller' => 'Ticketnotes', 'action' => 'add']) ?></li>
    </ul>
</nav>