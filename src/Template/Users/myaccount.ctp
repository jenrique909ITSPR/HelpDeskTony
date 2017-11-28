<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="users form">
	<h3><?= __('My Account') ?></h3>


	<div class="editdata">
    <?= $this->Form->create($user) ?>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('password');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
