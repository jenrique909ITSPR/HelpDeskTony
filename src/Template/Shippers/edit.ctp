<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shippers form">
	<h3><?= __('Edit Shipper') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Shippers'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($shipper) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; margin:10px;">
				<tbody>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Name')) ?></td><td><?=    $this->Form->control('name', ['label' => false]); ?></td></tr>
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
                ['action' => 'delete', $shipper->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $shipper->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Shippers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Stockmoves'), ['controller' => 'Stockmoves', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Stockmove'), ['controller' => 'Stockmoves', 'action' => 'add']) ?></li>
    </ul>
</nav>
