<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Invoice[]|\Cake\Collection\CollectionInterface $invoices
  */
?>

<div class="invoices index">
    <h3><?= __('Invoices') ?></h3>
	
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Invoice Number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('purchaseorder') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Company') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pdf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('xml') ?></th>
                <th scope="col"><?= $this->Paginator->sort('po') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('currency') ?></th>
                <th scope="col"><?= $this->Paginator->sort('warehouse') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoices as $invoice): ?>
            <tr>
                <td><?= h($invoice->id) ?></td>
                <td><?= h($invoice->purchaseorder_id) ?></td>

                <td><?= $invoice->has('company') ? $this->Html->link($invoice->company->Nombre, ['controller' => 'Companies', 'action' => 'view', $invoice->company->Cia]) : '' ?></td>
                
                <td><?= $invoice->has('pdf') ? $this->Html->link("<i class='fa fa-file-pdf-o' aria-hidden='true'></i> PDF", '/files/invoices/' . $invoice->pdf, ['escape' => false, 'target' => '_blank']) : '' ?></td>
                <td><?= $invoice->has('xml') ? $this->Html->link("<i class='fa fa-file-code-o' aria-hidden='true'></i> XML", '/files/invoices/' . $invoice->po, ['escape' => false, 'target' => '_blank']) : '' ?></td>
                <td><?= $invoice->has('po') ? $this->Html->link("<i class='fa fa-file-pdf-o' aria-hidden='true'></i> PDF", '/files/po/' . $invoice->po, ['escape' => false, 'target' => '_blank']) : '' ?></td>
                <td><?= h($invoice->invoicedate) ?></td>
                <td><?= h($invoice->amount) ?></td>
                <td><?= h($invoice->currency->name) ?></td>
                <td><?= h($invoice->warehouse->name) ?></td>

                
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $invoice->Factura]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
