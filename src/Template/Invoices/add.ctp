<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="invoices form">
	<h3><?= __('Add Invoice') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($invoice, ['type' => 'file']) ?>

				<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
						<tbody>
							<tr>
								<td style="width:5%;"><?= $this->form->label(__('Supplier')) ?></td>
								<td  colspan="3"><?=  $this->Form->control('supplier_id', ['label' => false,'options' => $suppliers, 'empty' => true]);  $this->Form->control('name', ['label' => false]); ?></td>
								<td  style="width:5%;"><?= $this->form->label(__('Number')) ?></td>
								<td><?=  $this->Form->control('number',['label' => false]);  ?></td>
							</tr>
							<tr>
								<td  style="width:5%;"><?= $this->form->label(__('Purchase Order')) ?></td>
								<td colspan="5"><?=  $this->Form->control('purchase_order',['label' => false]);   ?></td>
							</tr>
							<tr>
								<td  style="width:5%;"><?= $this->form->label(__('Pdf')) ?></td><td><?=  $this->Form->file('pdf',['label' => false]);  ?></td>
								<td  style="width:5%;"><?= $this->form->label(__('Xml')) ?></td><td><?=   $this->Form->file('xml',['label' => false]);  ?></td>
								<td  style="width:5%;"><?= $this->form->label(__('po')) ?></td><td><?=    $this->Form->file('po',['label' => false]);  ?></td>
							</tr>

						</tbody>
				</table>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
