<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="sources form">
	<h3><?= __('Add Source') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Sources'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($source) ?>
        <?php
            echo $this->Form->control('title');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
