<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Position[]|\Cake\Collection\CollectionInterface $positions  */
?>
<div class="searchbox right">
      <?= $this->Form->create('purchaseordersearch', ['type' => 'get','url' => ['controller' => 'Purchaseorders', 'action' => 'index']]) ?>
          <?php
              echo $this->Form->control('purchaseordersearch',['label' => false, 'placeholder' => __('Search Orden de Compra #')]);
          ?>
      <?= $this->Form->end() ?>


    </div>
<div class="purchaseorders index">
    <h3><?= __('Purchaseorders') ?></h3>
	
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('CveVale') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Suc_Solicita') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Justificacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Proveedor') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($purchaseorders as $purchaseorder): ?>
            <tr>
                <td><?= $this->Number->format($purchaseorder->CveVale) ?></td>
                <td><?= $purchaseorder->has('Suc_Solicita') ? $this->Html->link($purchaseorder->branch->NOMBRE, ['controller' => 'Branches', 'action' => 'view', $purchaseorder->branch->SUCURSAL]) : '' ?></td>

                <td><?= h($purchaseorder->Justificacion) ?></td>
                <td>
                <?php if(!is_null($purchaseorder->supplier)): ?>
                <?= h($purchaseorder->supplier->Nombre) ?>
                <?php endif; ?>
                </td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $purchaseorder->CveVale]) ?>
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

