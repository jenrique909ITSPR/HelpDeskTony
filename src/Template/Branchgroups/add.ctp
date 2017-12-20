<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="branchgroups form">
	<h3><?= __('Add Branchgroup') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Branchgroups'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($branchgroup) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
