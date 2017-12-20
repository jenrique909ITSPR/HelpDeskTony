<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="roles form">
	<h3><?= __('Add Role') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($role) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('articles._ids', ['options' => $articles]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
