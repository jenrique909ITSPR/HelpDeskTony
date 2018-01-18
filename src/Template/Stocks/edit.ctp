<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="stocks form">
	<h3><?= __('Edit Stock') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Stocks'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($stock) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td style="width:10%;">
								<?= $this->form->label(__('warehouse')) ?>
							</td>
							<td colspan="3">
								<?php  echo $this->Form->control('warehouse_id',['options' => $warehouses, 'empty' => true,'label'=> false]);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('item')) ?>
							</td>
							<td width="70%">
									<?php  echo $this->Form->control('item_id', ['options' => $items, 'empty' => true,'label'=> false]);?>
							</td>
							<td>
								<?= $this->form->label(__('reorder')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('reorder', ['label'=> false]);?>
							</td>
						</tr>
				</tbody>
		</table>
    
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
