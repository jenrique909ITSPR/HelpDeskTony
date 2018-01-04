<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="positiontypebranchesItemcategories form">
	<h3><?= __('Edit Positiontypebranches Itemcategory') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Positiontypebranches Itemcategories'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($positiontypebranchesItemcategory) ?>
        <?php
            echo $this->Form->control('positiontypebranch_id');
            echo $this->Form->control('itemcategory_id', ['options' => $itemcategories]);
            echo $this->Form->control('qty');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


