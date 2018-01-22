<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Invoice[]|\Cake\Collection\CollectionInterface $invoices
  */
?>

<div class="invoices index">
    <h3><?= __('Invoices') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('supplier_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pdf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('xml') ?></th>
                <th scope="col"><?= $this->Paginator->sort('purchase_order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('po') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoices as $invoice): ?>
            <tr>
                <td><?= $this->Number->format($invoice->id) ?></td>
                <td><?= $invoice->has('supplier') ? $this->Html->link($invoice->supplier->Nombre, ['controller' => 'Suppliers', 'action' => 'view', $invoice->supplier->ProvServicios]) : '' ?></td>
                <td><?= h($invoice->number) ?></td>
                <td><?= $invoice->has('pdf') ? $this->Html->link("<i class='fa fa-file-pdf-o' aria-hidden='true'></i> PDF", '/files/invoices/' . $invoice->pdf, ['escape' => false, 'target' => '_blank']) : '' ?></td>
                <td><?= $invoice->has('xml') ? $this->Html->link("<i class='fa fa-file-code-o' aria-hidden='true'></i> XML", '/files/invoices/' . $invoice->po, ['escape' => false, 'target' => '_blank']) : '' ?></td>
                <td><?= h($invoice->purchase_order) ?></td>
                <td><?= $invoice->has('po') ? $this->Html->link("<i class='fa fa-file-pdf-o' aria-hidden='true'></i> PDF", '/files/po/' . $invoice->po, ['escape' => false, 'target' => '_blank']) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $invoice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invoice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?>
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
