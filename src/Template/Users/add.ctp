<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="users form">
	<h3><?= __('Add User') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($user) ?>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('positionbranch_id', ['options' => $positionbranches, 'empty' => true]);
            echo $this->Form->control('password');
            echo $this->Form->control('statususer_id', ['options' => $statususers, 'empty' => true]);
            echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->control('role_id', ['options' => $roles, 'empty' => true]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
