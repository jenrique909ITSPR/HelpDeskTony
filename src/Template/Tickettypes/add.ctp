<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="tickettypes form">
	<h3><?= __('Add Tickettype') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Tickettypes'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($tickettype) ?>

				<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
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
