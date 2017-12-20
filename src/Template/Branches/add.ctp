<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="branches form">
	<h3><?= __('Add Branch') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Branches'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($branch) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('branchgroup_id', ['options' => $branchgroups, 'empty' => true]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
