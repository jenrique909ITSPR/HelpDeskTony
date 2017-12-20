<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="statususers form">
	<h3><?= __('Add Statususer') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Statususers'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($statususer) ?>
        <?php
            echo $this->Form->control('name');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
