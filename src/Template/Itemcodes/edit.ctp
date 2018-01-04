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
       
        <table cellpadding="0" cellspacing="0" style="width:100%; margin:10px;">
            <tbody>
                <tr><td  style="width:5%;"><?= $this->form->label(__('Item')) ?></td><td><?= $this->Form->control('item_id', ['label' => false,'options' => $items, 'empty' => true]); ?></td></tr>
                <tr><td  style="width:5%;"><?= $this->form->label(__('Serial')) ?></td><td><?= $this->Form->control('serial',['label' => false]); ?></td></tr>
                <tr><td  style="width:5%;"><?= $this->form->label(__('Invoices')) ?></td><td><?= $this->Form->control('invoice_id', ['label' => false,'options' => $invoices, 'empty' => true]); ?></td></tr>
                <tr><td  style="width:5%;"><?= $this->form->label(__('Statusitems')) ?></td><td><?= $this->Form->control('statusitem_id', ['label' => false,'options' => $statusitems, 'empty' => true]); ?></td></tr>
                <tr><td  style="width:5%;"><?= $this->form->label(__('Warranty')) ?></td><td><?=  $this->Form->control('warranty', ['label' => false,'empty' => true]); ?></td></tr>
                <tr><td  style="width:5%;"><?= $this->form->label(__('Positionbranches')) ?></td><td><?=  $this->Form->control('positionbranch_id', ['label' => false,'options' => $positionbranches, 'empty' => true]); ?></td></tr>
                <tr><td  style="width:5%;"><?= $this->form->label(__('Service tag')) ?></td><td><?= $this->Form->control('service_tag',['label' => false]); ?></td></tr>
                <tr><td  style="width:5%;"><?= $this->form->label(__('Cost')) ?></td><td><?= $this->Form->control('cost',['label' => false]); ?></td></tr>
                <tr><td  style="width:5%;"><?= $this->form->label(__('Currencies')) ?></td><td><?= $this->Form->control('currency_id', ['label' => false,'options' => $currencies, 'empty' => true]); ?></td></tr>
                <tr><td  style="width:5%;"><?= $this->form->label(__('Insured')) ?></td><td><?= $this->Form->control('insured',['label' => false]); ?></td></tr>
            </tbody>
        </table>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>

