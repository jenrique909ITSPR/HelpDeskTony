<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="stockmovesDetails form">
	<h3><?= __('Edit Stockmoves Detail') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Stockmoves Details'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($stockmovesDetail) ?>
        <?php
            echo $this->Form->control('stockmove_id', ['options' => $stockmoves, 'empty' => true]);
            echo $this->Form->control('item_id', ['options' => $items, 'empty' => true]);
            echo $this->Form->control('itemcode_id', ['options' => $itemcodes, 'empty' => true]);
            echo $this->Form->control('qty');
            echo $this->Form->control('deliverydate');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
