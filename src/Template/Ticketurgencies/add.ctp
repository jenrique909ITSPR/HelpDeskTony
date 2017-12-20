<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketurgencies form">
	<h3><?= __('Add Ticketurgency') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketurgencies'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketurgency) ?>
        <?php
            echo $this->Form->control('name');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
