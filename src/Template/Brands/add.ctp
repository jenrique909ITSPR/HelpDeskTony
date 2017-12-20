<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="brands form">
	<h3><?= __('Add Brand') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Brands'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($brand) ?>
        <?php
            echo $this->Form->control('name');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
