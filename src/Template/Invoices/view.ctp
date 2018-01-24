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
            <th scope="row"><?= __('Factura') ?></th>
            <td><?= h($invoice->Factura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Purchaseorder') ?></th>
            <td><?= $invoice->has('purchaseorder') ? $this->Html->link($invoice->purchaseorder->CveVale, ['controller' => 'Purchaseorder', 'action' => 'view', $invoice->purchaseorder->CveVale]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Branch') ?></th>
            <td><?= $invoice->has('branch') ? $this->Html->link($invoice->branch->NOMBRE, ['controller' => 'Suppliers', 'action' => 'view', $invoice->branch->NOMBRE]) : '' ?></td>
        </tr>
            <tr>
            <th scope="row"><?= __('Renglon') ?></th>
            <td><?= h($invoice->Renglon) ?></td>
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
            <th scope="row"><?= __('FechaEmi') ?></th>
            <td><?= h($invoice->FechaEmi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Importe') ?></th>
            <td><?= h($invoice->Importe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtotal') ?></th>
            <td><?= h($invoice->Subtotal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ImpIva') ?></th>
            <td><?= h($invoice->ImpIva) ?></td>
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
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Serial') ?></th>
                <th scope="col"><?= __('Invoice Id') ?></th>
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
                <td><?= h($itemcodes->item_id) ?></td>
                <td><?= h($itemcodes->serial) ?></td>
                <td><?= h($itemcodes->invoice_id) ?></td>
                <td><?= h($itemcodes->statusitem_id) ?></td>
                <td><?= h($itemcodes->created) ?></td>
                <td><?= h($itemcodes->warranty) ?></td>
                <td><?= h($itemcodes->positionbranch_id) ?></td>
                <td><?= h($itemcodes->service_tag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Itemcodes', 'action' => 'view', $itemcodes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Itemcodes', 'action' => 'edit', $itemcodes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Itemcodes', 'action' => 'delete', $itemcodes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemcodes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
