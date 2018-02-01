<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="itemcodes form">
	<h3><?= __('Edit Itemcode') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Itemcodes'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($itemcode) ?>

        <table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
            <tbody>
                <tr>
									<td  style="width:5%;"><?= $this->form->label(__('Item')) ?></td>
									<td  width="55%"><?= $this->Form->control('item_id', ['label' => false,'options' => $items, 'empty' => true]); ?></td>
									<td  style="width:5%;"><?= $this->form->label(__('Statusitems')) ?></td>
									<td colspan="3"><?= $this->Form->control('statusitem_id', ['label' => false,'options' => $statusitems, 'empty' => true]); ?></td>
								</tr>
                <tr>
									<td><?= $this->form->label(__('Serial')) ?></td>
									<td><?= $this->Form->control('serial',['label' => false]); ?></td>
									<td><?= $this->form->label(__('Positionbranches')) ?></td>
									<td colspan="3"><?=  $this->Form->control('positionbranch_id', ['label' => false,'options' => $positionbranches, 'empty' => true]); ?></td>
								</tr>
                <tr>
									<td><?= $this->form->label(__('Invoices')) ?></td>
									<td><?= $this->Form->control('invoice_id', ['label' => false,'options' => $invoices, 'empty' => true]); ?></td>
									<td><?= $this->form->label(__('Insured')) ?></td>
									<td><?= $this->Form->control('insured_id',['options' => $insureds,'empty' => true,'label' => false]); ?></td>
									<td><?= $this->form->label(__('Service tag')) ?></td>
									<td><?= $this->Form->control('service_tag',['label' => false]); ?></td>
								</tr>
                <tr>
									<td><?= $this->form->label(__('Warranty')) ?></td>
									<td colspan="5"><?=  $this->Form->control('warranty', ['label' => false,'empty' => true]); ?></td>
								</tr>
                <tr>
									<td><?= $this->form->label(__('Cost')) ?></td>
									<td><?= $this->Form->control('cost',['label' => false]); ?></td>
									<td><?= $this->form->label(__('Currencies')) ?></td>
									<td colspan="3"><?= $this->Form->control('currency_id', ['label' => false,'options' => $currencies, 'empty' => true]); ?></td>
								</tr>
            </tbody>
        </table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
