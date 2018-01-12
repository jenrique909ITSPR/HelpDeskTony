<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="currencies form">
	<h3><?= __('Add Currency') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Currencies'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($currency) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Name')) ?></td><td><?=    $this->Form->control('name', ['label' => false]); ?></td></tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
