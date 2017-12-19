<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketstatuses form">
	<h3><?= __('Add Ticketstatus') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($ticketstatus) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('value_order');
            echo $this->Form->control('tickettypes._ids', ['options' => $tickettypes]);
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickettypes'), ['controller' => 'Tickettypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tickettype'), ['controller' => 'Tickettypes', 'action' => 'add']) ?></li>
    </ul>
</nav>