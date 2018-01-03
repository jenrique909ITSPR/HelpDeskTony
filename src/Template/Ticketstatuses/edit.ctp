<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketstatuses form">
	<h3><?= __('Edit Ticketstatus') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketstatus) ?>
			<table cellpadding="0" cellspacing="0" style="width:100%; margin:10px;">
					<tbody>
							<tr><td  style="width:5%;"><?= $this->form->label(__('Name')) ?></td><td><?=    $this->Form->control('name', ['label' => false]); ?></td></tr>
							<tr><td  style="width:5%;"><?= $this->form->label(__('Value Order')) ?></td><td><?=  $this->Form->control('value_order',['label' => false]); ?></td></tr>
							<tr><td  style="width:5%;"><?= $this->form->label(__('Tickettypes')) ?></td><td><?= $this->Form->control('tickettypes._ids', ['label' => false,'options' => $tickettypes]);  ?></td></tr>
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
                ['action' => 'delete', $ticketstatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ticketstatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tickettypes'), ['controller' => 'Tickettypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tickettype'), ['controller' => 'Tickettypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
