<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="stockmovesDetails form">
	<h3><?= __('Edit Stockmoves Detail') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Stockmoves Details'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($stockmovesDetail) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td style="width:10%;">
								<?= $this->form->label(__('stockmove')) ?>
							</td>
							<td width="30%">
								<?php  echo $this->Form->control('stockmove_id',['options' => $stockmoves, 'empty' => true,'label'=> false]);?>
							</td>
							<td>
								<?= $this->form->label(__('item')) ?>
							</td>
							<td colspan="3">
									<?php  echo $this->Form->control('item_id', ['options' => $items, 'empty' => true,'label'=> false]);?>
							</td>
						</tr>
							<tr>
							<td>
								<?= $this->form->label(__('itemcode')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('itemcode_id', ['options' => $itemcodes, 'empty' => true, 'label'=> false]);?>
							</td>
							<td>
								<?= $this->form->label(__('qty')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('qty', ['label'=> false]);?>
							</td>
							<td width="13%">
								<?= $this->form->label(__('deliverydate')) ?>
							</td>
							<td width="20%">
								<?php  echo $this->Form->control('deliverydate',['type' => 'text' , 'class' => 'easyui-datetimebox', 'style' => 'width:100%;', 'label'=>false]);?>
							</td>
						</tr>
				</tbody>
		</table>


    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
