<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="movereasontemplates form">
	<h3><?= __('Edit Movereasontemplate') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Movereasontemplates'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($movereasontemplate) ?>
        <?php
            echo $this->Form->control('template');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('movereason_id', ['options' => $movereasons, 'empty' => true]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
