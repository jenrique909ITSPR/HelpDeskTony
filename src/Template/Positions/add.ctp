<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="positions form">
	<h3><?= __('Add Position') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Positions'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($position) ?>
        <?php
            echo $this->Form->control('positiontypebranch_id', ['options' => $positiontypebranches, 'empty' => true]);
            echo $this->Form->control('name');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>

