<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="positiontypebranchesItemcategories form">
	<h3><?= __('Edit Positiontypebranches Itemcategory') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Positiontypebranches Itemcategories'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
					<tr>
						<td>
							<?= $this->form->label(__('positiontypebranch')) ?>
						</td>
						<td colspan="3">
								<?php  echo $this->Form->control('positiontypebranch_id', ['options' => $positiontypebranches, 'empty' => true,'label'=> false]);?>
						</td>
				</tr>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('Itemcategory')) ?>
							</td>
							<td width="70%">
								<?php  echo $this->Form->control('itemcategory_id', ['options' => $itemcategories,'label'=> false]);?>
							</td>
							<td style="width:7%;">
								<?= $this->form->label(__('qty')) ?>
							</td>
							<td>
								<?php  echo $this->Form->control('qty', ['type' => 'number','label'=> false]);?>
							</td>
						</tr>
					</tbody>
		</table>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
