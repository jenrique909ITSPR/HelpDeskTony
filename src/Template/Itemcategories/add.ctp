<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="itemcategories form">
	<h3><?= __('Add Itemcategory') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Itemcategories'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($itemcategory) ?>

				<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
						<tbody>
								<tr><td  style="width:5%;"><?= $this->form->label(__('Name')) ?></td><td><?=    $this->Form->control('name', ['label' => false]); ?></td></tr>
								<tr><td style="width:5%;"><?= $this->form->label(__('Parent')) ?></td><td><?=  $this->Form->control('parent_id', ['options' => $parentItemcategories, 'empty' => true, 'label' => false ]); ?></td></tr>
						</tbody>
				</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
