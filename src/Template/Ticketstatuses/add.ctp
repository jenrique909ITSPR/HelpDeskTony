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

				<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
						<tbody>
								<tr><td  style="width:5%;"><?= $this->form->label(__('Name')) ?></td><td><?=    $this->Form->control('name', ['label' => false]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('Value Order')) ?></td><td><?=  $this->Form->control('value_order',['label' => false]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('Tickettypes')) ?></td><td><?= $this->Form->control('tickettypes._ids', ['label' => false,'options' => $tickettypes]);  ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('Alert_count')) ?></td><td><?= $this->Form->control('alert_count', ['label' => false]);  ?></td></tr>
						</tbody>
				</table>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
