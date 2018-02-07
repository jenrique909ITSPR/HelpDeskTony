<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="items form">
	<h3><?= __('Add Item') ?></h3>
	<!--<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?></li>
		</ul>
	</div>
-->
	<div class="editdata">
    <?= $this->Form->create($item) ?>

		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('name')) ?>
							</td>
							<td colspan="5">
								<?php  echo $this->Form->control('name',['label'=> false]);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('itemcategory')) ?>
							</td>
							<td width="33%">
									<?php  echo $this->Form->control('itemcategory_id', ['options' => $itemcategories, 'empty' => true,'label'=> false]);?>
							</td>
							<td width="7%">
								<?= $this->form->label(__('itemtype')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('itemtype_id', ['options' => $itemtypes,'label'=> false]);?>
							</td>
							<td width="7%">
								<?= $this->form->label(__('parent')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('parent_id', ['options' => $parentItems,'label'=> false, 'empty' => true]);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('brand')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('brand_id', ['options' => $brands,'label'=> false]);?>
							</td>
							<td>
								<?= $this->form->label(__('model')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('model', ['label'=> false]);?>
							</td>
							<td>
								<?= $this->form->label(__('color')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('color', ['label'=> false]);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('unit_cost')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('unit_cost', ['label'=> false]);?>
							</td>
							<td>
								<?= $this->form->label(__('currency')) ?>
							</td>
							<td colspan="3">
									<?php  echo $this->Form->control('currency_id', ['options' => $currencies,'label'=> false]);?>
							</td>
						</tr>
				</tbody>
		</table>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
