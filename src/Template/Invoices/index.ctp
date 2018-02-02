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
                <th scope="col"><?= $this->Paginator->sort('Factura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('CveVale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Sucursal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Renglon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pdf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('xml') ?></th>
                <th scope="col"><?= $this->Paginator->sort('po') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FechaEmi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Importe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Subtotal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ImpIva') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoices as $invoice): ?>
            <tr>
                <td><?= h($invoice->id) ?></td>
                 <td><?= $invoice->has('purchaseorder') ? $this->Html->link($invoice->purchaseorder->CveVale, ['controller' => 'Purchaseorders' , 'action' => 'view', $invoice->purchaseorder->CveVale]) : '' ?></td>

                <td><?= $invoice->has('branch') ? $this->Html->link($invoice->branch->NOMBRE, ['controller' => 'Branches', 'action' => 'view', $invoice->branch->NOMBRE]) : '' ?></td>
                <td><?= h($invoice->Renglon) ?></td>


                <td><?= $invoice->has('pdf') ? $this->Html->link("<i class='fa fa-file-pdf-o' aria-hidden='true'></i> PDF", '/files/invoices/' . $invoice->pdf, ['escape' => false, 'target' => '_blank']) : '' ?></td>
                <td><?= $invoice->has('xml') ? $this->Html->link("<i class='fa fa-file-code-o' aria-hidden='true'></i> XML", '/files/invoices/' . $invoice->po, ['escape' => false, 'target' => '_blank']) : '' ?></td>
                <td><?= $invoice->has('po') ? $this->Html->link("<i class='fa fa-file-pdf-o' aria-hidden='true'></i> PDF", '/files/po/' . $invoice->po, ['escape' => false, 'target' => '_blank']) : '' ?></td>
                <td><?= h($invoice->FechaEmi) ?></td>
                <td><?= h($invoice->Importe) ?></td>
                <td><?= h($invoice->Subtotal) ?></td>
                <td><?= h($invoice->ImpIva) ?></td>

                
                
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
