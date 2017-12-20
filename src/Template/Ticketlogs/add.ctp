<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketlogs form">
	<h3><?= __('Add Ticketlog') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketlogs'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketlog) ?>
        <?php
            echo $this->Form->control('ticket_id', ['options' => $tickets, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->control('user_transfer');
            echo $this->Form->control('group_transfer');
            echo $this->Form->control('new_status');
            echo $this->Form->control('coments');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
