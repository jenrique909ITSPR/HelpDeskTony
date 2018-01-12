<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="warehouses form">
	<h3><?= __('Edit Warehouse') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Warehouses'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($warehouse) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Name')) ?></td><td><?=    $this->Form->control('name', ['label' => false]); ?></td></tr>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Branch')) ?></td><td><?=    $this->Form->control('branch_id', ['label' => false, 'options' => $branches, 'empty' => true]); ?></td></tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
