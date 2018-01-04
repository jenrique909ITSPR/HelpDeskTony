<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="positiontypes form">
	<h3><?= __('Add Positiontype') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Positiontypes'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($positiontype) ?>
        <?php
            echo $this->Form->control('name');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


