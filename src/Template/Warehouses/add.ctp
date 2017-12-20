<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="warehouses form">
	<h3><?= __('Add Warehouse') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Warehouses'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($warehouse) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('branch_id', ['options' => $branches, 'empty' => true]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
