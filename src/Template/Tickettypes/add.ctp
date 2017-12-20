<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="tickettypes form">
	<h3><?= __('Add Tickettype') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Tickettypes'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($tickettype) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('tag');
            echo $this->Form->control('rank');
            echo $this->Form->control('color');
            echo $this->Form->control('ticketstatuses._ids', ['options' => $ticketstatuses]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
