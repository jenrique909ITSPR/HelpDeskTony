<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketnotes form">
	<h3><?= __('Edit Ticketnote') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketnotes'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketnote) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
					<tr>
						<td  style="width:5%;">
							<?= $this->form->label(__('Ticket')) ?>
						</td>
						<td colspan="3">
							<?= $this->Form->control('ticket_id', ['label' => false,'options' => $tickets, 'empty' => true]); ?>
						</td>
					</tr>
					<tr>
						<td  style="width:5%;"><?= $this->form->label(__('Description')) ?></td>
						<td colspan="3"><?= $this->Form->control('description',['label' => false]); ?></td>
					</tr>
						<tr>
							<td  style="width:5%;"><?= $this->form->label(__('User')) ?></td>
							<td><?= $this->Form->control('user_id', ['label' => false,'options' => $users]); ?></td>
							<td  style="width:5%;"><?= $this->form->label(__('Ticketnotetypes')) ?></td>
							<td><?= $this->Form->control('ticketnotestype_id', ['label' => false,'options' => $ticketnotestypes]); ?></td>
						</tr>
				</tbody>
		</table>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
