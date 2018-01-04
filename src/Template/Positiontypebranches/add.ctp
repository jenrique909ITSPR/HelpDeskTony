<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="positiontypebranches form">
	<h3><?= __('Add Positiontypebranch') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Positiontypebranches'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($positiontypebranch) ?>
        <?php
            echo $this->Form->control('branch_id', ['options' => $branches, 'empty' => true]);
            echo $this->Form->control('positiontype_id', ['options' => $positiontypes, 'empty' => true]);
            echo $this->Form->control('qty');
            echo $this->Form->control('itemcategories._ids', ['options' => $itemcategories]);
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


