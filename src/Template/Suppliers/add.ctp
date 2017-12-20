<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="suppliers form">
	<h3><?= __('Add Supplier') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Suppliers'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($supplier) ?>
        <?php
            echo $this->Form->control('name');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
