<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Invoice $invoice
  */
?>

<div class="invoices view">
    <h3><?= h($invoice->Factura) ?></h3>
	<div class="actions">
		<ul>
			
			<li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?> </li>
			<!--<li><?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id]) ?> </li>-->
		</ul>
	</div>


	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Invoice number') ?></th>
            <td><?= h($invoice->invoice_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($invoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Purchaseorder') ?></th>
             <td><?= h($invoice->purchaseorder_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $invoice->has('company') ? $this->Html->link($invoice->company->Nombre, ['controller' => 'Companies', 'action' => 'view', $invoice->company->Nombre]) : '' ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Pdf') ?></th>
            <td><?= h($invoice->pdf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Xml') ?></th>
            <td><?= h($invoice->xml) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoicedate') ?></th>
            <td><?= h($invoice->invoicedate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Importe') ?></th>
            <td><?= h($invoice->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Currency') ?></th>
            <td><?= h($invoice->currency->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Warehouse') ?></th>
            <td><?= h($invoice->warehouse->name) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Itemcodes') ?>">
        <h4><?= __('Related Itemcodes') ?></h4>
        <?php if (!empty($invoice->itemcodes)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Item') ?></th>
                <th scope="col"><?= __('Serial') ?></th>
                <th scope="col"><?= __('Statusitem Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Warranty') ?></th>
                <th scope="col"><?= __('Positionbranch Id') ?></th>
                <th scope="col"><?= __('Service Tag') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($invoice->itemcodes as $itemcodes): ?>
            <tr>
                <td><?= h($itemcodes->id) ?></td>
                <td><?= h($itemcodes->item->name) ?></td>
                <td><?= h($itemcodes->serial) ?></td>
                <td><?= h($itemcodes->statusitem->name) ?></td>
                <td><?= h($itemcodes->created) ?></td>
                <td><?= h($itemcodes->warranty) ?></td>
                <td><?= h($itemcodes->position_id) ?></td>
                <td><?= h($itemcodes->service_tag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Itemcodes', 'action' => 'view', $itemcodes->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
