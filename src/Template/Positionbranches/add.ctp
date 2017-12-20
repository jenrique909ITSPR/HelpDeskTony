<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="positionbranches form">
	<h3><?= __('Add Positionbranch') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Positionbranches'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($positionbranch) ?>
        <?php
            echo $this->Form->control('branch_id', ['options' => $branches, 'empty' => true]);
            echo $this->Form->control('position_id', ['options' => $positions, 'empty' => true]);
            echo $this->Form->control('name');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
