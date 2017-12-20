<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="groups form">
	<h3><?= __('Add Group') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($group) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('color');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
