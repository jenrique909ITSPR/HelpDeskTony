<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="sources form">
	<h3><?= __('Edit Source') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Sources'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($source) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Title')) ?></td><td><?=    $this->Form->control('title', ['label' => false]); ?></td></tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
