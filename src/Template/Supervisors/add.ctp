<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="supervisors form">
	<h3><?= __('Add Supervisor') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Supervisors'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	
	<div class="editdata">
    <?= $this->Form->create($supervisor) ?>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('branchgroup_id', ['options' => $branchgroups]);
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Supervisors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Branchgroups'), ['controller' => 'Branchgroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branchgroup'), ['controller' => 'Branchgroups', 'action' => 'add']) ?></li>
    </ul>
</nav>