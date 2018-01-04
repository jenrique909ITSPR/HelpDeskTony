<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="layouts form">
	<h3><?= __('Edit Layout') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Layouts'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($layout) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; margin:10px;">
				<tbody>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Branch')) ?></td><td><?=   $this->Form->control('branch_id', ['label' => false,'options' => $branches, 'empty' => true]); ?></td></tr>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Position')) ?></td><td><?=  $this->Form->control('position_id', ['label' => false,'options' => $positions, 'empty' => true]); ?></td></tr>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Layout')) ?></td><td><?=  $this->Form->control('layout',['label' => false]); ?></td></tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
