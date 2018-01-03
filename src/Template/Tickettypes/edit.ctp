<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="tickettypes form">
	<h3><?= __('Edit Tickettype') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Tickettypes'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($tickettype) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; margin:10px;">
				<tbody>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Name')) ?></td><td><?= $this->Form->control('name',['label' => false]); ?></td></tr>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Tag')) ?></td><td><?= $this->Form->control('tag',['label' => false]); ?></td></tr>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Rank')) ?></td><td><?= $this->Form->control('rank',['label' => false]); ?></td></tr>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Color')) ?></td><td><?= $this->Form->control('color',['label' => false]); ?></td></tr>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Ticketstatuses')) ?></td><td><?= $this->Form->control('ticketstatuses._ids', ['label' => false,'options' => $ticketstatuses]); ?></td></tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tickettype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tickettype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tickettypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketstatuses'), ['controller' => 'Ticketstatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketstatus'), ['controller' => 'Ticketstatuses', 'action' => 'add']) ?></li>
    </ul>
</nav>
