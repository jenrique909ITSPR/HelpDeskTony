<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="itemcodes form">
	<h3><?= __('Edit Itemcode') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Itemcodes'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($itemcode) ?>
        <?php
            echo $this->Form->control('item_id', ['options' => $items, 'empty' => true]);
            echo $this->Form->control('serial');
            echo $this->Form->control('invoice_id', ['options' => $invoices, 'empty' => true]);
            echo $this->Form->control('statusitem_id', ['options' => $statusitems, 'empty' => true]);
            echo $this->Form->control('warranty', ['empty' => true]);
            echo $this->Form->control('positionbranch_id', ['options' => $positionbranches, 'empty' => true]);
            echo $this->Form->control('service_tag');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
