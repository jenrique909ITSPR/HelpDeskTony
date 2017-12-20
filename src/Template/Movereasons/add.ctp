<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="movereasons form">
	<h3><?= __('Add Movereason') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Movereasons'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($movereason) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('factor');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
