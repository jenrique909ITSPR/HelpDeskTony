<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="shippers form">
	<h3><?= __('Add Shipper') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Shippers'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($shipper) ?>
        <?php
            echo $this->Form->control('name');
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
