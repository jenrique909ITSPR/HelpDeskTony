<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketstatusesTickettypes form">
	<h3><?= __('Edit Ticketstatuses Tickettype') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketstatuses Tickettypes'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketstatusesTickettype) ?>
        <?php
            echo $this->Form->control('ticket_status_id', ['options' => $ticketStatuses]);
            echo $this->Form->control('tickettype_id', ['options' => $tickettypes]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
