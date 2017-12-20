<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="layouts form">
	<h3><?= __('Add Layout') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Layouts'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($layout) ?>
        <?php
            echo $this->Form->control('branch_id', ['options' => $branches, 'empty' => true]);
            echo $this->Form->control('position_id', ['options' => $positions, 'empty' => true]);
            echo $this->Form->control('layout');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
