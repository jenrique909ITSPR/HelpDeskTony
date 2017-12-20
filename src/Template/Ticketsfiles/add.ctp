<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketsfiles form">
	<h3><?= __('Add Ticketsfile') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketsfiles'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketsfile) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('ticketnote_id', ['options' => $ticketnotes, 'empty' => true]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
