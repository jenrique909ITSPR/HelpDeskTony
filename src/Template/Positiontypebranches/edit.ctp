<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="positiontypebranches form">
	<h3><?= __('Edit Positiontypebranch') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Positiontypebranches'), ['action' => 'index']) ?></li>
		</ul>
	</div>
	 <?= $this->Form->create($positiontypebranch) ?>
	<div class="editdata">
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td style="width:10%;">
								<?= $this->form->label(__('branch')) ?>
							</td>
							<td colspan="3">
								<?php  echo $this->Form->control('branch_id',['options' => $branches, 'empty' => true,'label'=> false]);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('positiontype')) ?>
							</td>
							<td width="70%">
									<?php  echo $this->Form->control('positiontype_id', ['options' => $positiontypes, 'empty' => true,'label'=> false]);?>
							</td>
							<td>
								<?= $this->form->label(__('qty')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('qty', ['type'=> 'number','label'=> false]);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('itemcategories')) ?>
							</td>
							<td colspan="3">
									<?php  echo $this->Form->control('itemcategories._ids', ['options' => $itemcategories,'label'=> false]);?>
							</td>
						</tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
