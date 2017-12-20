<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="currencies form">
	<h3><?= __('Add Currency') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Currencies'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($currency) ?>
        <?php
            echo $this->Form->control('name');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
