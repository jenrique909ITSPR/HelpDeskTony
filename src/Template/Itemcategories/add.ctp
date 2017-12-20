<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="itemcategories form">
	<h3><?= __('Add Itemcategory') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Itemcategories'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($itemcategory) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('parent_id', ['options' => $parentItemcategories, 'empty' => true]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
