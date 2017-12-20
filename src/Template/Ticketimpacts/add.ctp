<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketimpacts form">
	<h3><?= __('Add Ticketimpact') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketimpacts'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketimpact) ?>
        <?php
            echo $this->Form->control('name');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
