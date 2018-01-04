<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="items form">
	<h3><?= __('Edit Item') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($item) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('itemcategory_id', ['options' => $itemcategories, 'empty' => true]);
            echo $this->Form->control('currency_id', ['options' => $currencies, 'empty' => true]);
            echo $this->Form->control('model');
            echo $this->Form->control('color');
            echo $this->Form->control('unit_cost');
            echo $this->Form->control('brand_id', ['options' => $brands, 'empty' => true]);
            echo $this->Form->control('itemtype_id', ['options' => $itemtypes]);
            echo $this->Form->control('parent_id', ['options' => $parentItems, 'empty' => true]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
