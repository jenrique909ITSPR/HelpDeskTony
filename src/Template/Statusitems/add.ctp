<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="statusitems form">
	<h3><?= __('Add Statusitem') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Statusitems'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($statusitem) ?>
        <?php
            echo $this->Form->control('name');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
