<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketpriorities form">
	<h3><?= __('Add Ticketpriority') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketpriorities'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketpriority) ?>
        <?php
            echo $this->Form->control('name');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
