<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketnotes form">
	<h3><?= __('Add Ticketnote') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketnotes'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketnote) ?>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->control('ticket_id', ['options' => $tickets, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('ticketnotestype_id', ['options' => $ticketnotestypes]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
