<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="hdtemplate form">
	<h3><?= __('Edit Hdtemplate') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Hdtemplate'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($hdtemplate) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Title')) ?></td><td><?= $this->Form->control('title', ['label' => false]); ?></td></tr>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Hdcategories')) ?></td><td><?= $this->Form->control('hdcategory_id', ['label' => false,'options' => $hdcategories]); ?></td></tr>
				</tbody>
		</table>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
