<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="branchgroups form">
	<h3><?= __('Edit Branchgroup') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Branchgroups'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($branchgroup) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Name')) ?></td><td><?=    $this->Form->control('name', ['label' => false]); ?></td></tr>
						<tr><td  style="width:5%;"><?= $this->form->label(__('User')) ?></td><td><?=    $this->Form->control('user_id', ['label' => false , 'options' => $users]); ?></td></tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
