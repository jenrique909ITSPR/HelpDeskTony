<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="stocks form">
	<h3><?= __('Edit Stock') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Stocks'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($stock) ?>
        <?php
            echo $this->Form->control('warehouse_id', ['options' => $warehouses, 'empty' => true]);
            echo $this->Form->control('item_id', ['options' => $items, 'empty' => true]);
            echo $this->Form->control('reorder');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
