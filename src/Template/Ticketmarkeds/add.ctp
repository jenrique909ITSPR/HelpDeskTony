<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketmarkeds form">
	<h3><?= __('Add Ticketmarked') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketmarkeds'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketmarked) ?>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('ticket_id', ['options' => $tickets]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
