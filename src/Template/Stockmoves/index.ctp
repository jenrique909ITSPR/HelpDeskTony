<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Stockmove[]|\Cake\Collection\CollectionInterface $stockmoves
  */
?>

<div class="stockmoves index">
    <h3><?= __('Stockmoves') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Stockmove'), ['action' => 'add']) ?></li>
		</ul>
	</div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Almacen origen') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Almacen destino') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receiver') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firma de recibido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movereason_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipper_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('guide_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('packages') ?></th>

                <th scope="col"><?= $this->Paginator->sort('Usuario Responsable') ?></th>
                <th scope="col"><?= $this->Paginator->sort('completed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($stockmoves as $stockmove): ?>
            <tr>
                <td><?= $this->Number->format($stockmove->id) ?></td>
                <td><?= $stockmove->has('warehouse') ? $this->Html->link($stockmove->warehouse->name, ['controller' => 'Warehouses', 'action' => 'view', $stockmove->warehouse->id]) : '' ?></td>
                <td><?= $stockmove->has('warehouse2') ? $this->Html->link($stockmove->warehouse2->name, ['controller' => 'Warehouses', 'action' => 'view', $stockmove->warehouse2->id]) : '' ?></td>
                
                <td><?= $stockmove->has('userreceiver') ? $this->Html->link($stockmove->userreceiver->name, ['controller' => 'Users', 'action' => 'view', $stockmove->userreceiver->id]) : '' ?></td>
                <td><?= h($stockmove->receiver_sign) ?></td>
                <td><?= $stockmove->has('movereason') ? $this->Html->link($stockmove->movereason->name, ['controller' => 'Movereasons', 'action' => 'view', $stockmove->movereason->id]) : '' ?></td>
                <td><?= $stockmove->has('shipper') ? $this->Html->link($stockmove->shipper->name, ['controller' => 'Shippers', 'action' => 'view', $stockmove->shipper->id]) : '' ?></td>
                <td><?= h($stockmove->guide_number) ?></td>
                <td><?= $this->Number->format($stockmove->packages) ?></td>
                <td><?= $stockmove->has('user') ? $this->Html->link($stockmove->user->name, ['controller' => 'Users', 'action' => 'view', $stockmove->user->id]) : '' ?></td>

                <td><?= $this->Number->format($stockmove->completed) ?></td>
                <td><?= $this->Number->format($stockmove->parent_id) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $stockmove->id]) ?>
                    <!--<?= $this->Html->link(__('Edit'), ['action' => 'edit', $stockmove->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $stockmove->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockmove->id)]) ?>-->
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
