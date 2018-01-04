<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="layoutcategories form">
	<h3><?= __('Edit Layoutcategory') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Layoutcategories'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($layoutcategory) ?>
        <?php
            echo $this->Form->control('itemcategory_id', ['options' => $itemcategories, 'empty' => true]);
            echo $this->Form->control('layout_id', ['options' => $layouts, 'empty' => true]);
            echo $this->Form->control('qty');
            echo $this->Form->control('compare');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
