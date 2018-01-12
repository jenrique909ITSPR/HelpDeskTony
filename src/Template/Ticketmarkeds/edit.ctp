<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketmarkeds form">
	<h3><?= __('Edit Ticketmarked') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketmarkeds'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketmarked) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr><td  style="width:5%;"><?= $this->form->label(__('User')) ?></td><td><?= $this->Form->control('user_id', ['label' => false,'options' => $users]); ?></td></tr>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Ticket')) ?></td><td><?= $this->Form->control('ticket_id', ['label' => false,'options' => $tickets]); ?></td></tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
