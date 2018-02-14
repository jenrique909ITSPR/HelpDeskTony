<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Stockmove $stockmove
  */
?>

<div class="stockmoves view">
    <h3><?= h($stockmove->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Stockmove'), ['action' => 'delete', $stockmove->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockmove->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Stockmove'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Stockmoves'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Stockmove'), ['action' => 'edit', $stockmove->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Warehouse') ?></th>
            <td><?= $stockmove->has('warehouse') ? $this->Html->link($stockmove->warehouse->name, ['controller' => 'Warehouses', 'action' => 'view', $stockmove->warehouse->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receiver Sign') ?></th>
            <td><?= !empty($stockmove->receiver_sign) ? h($stockmove->receiver_sign) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movereason') ?></th>
            <td><?= $stockmove->has('movereason') ? $this->Html->link($stockmove->movereason->name, ['controller' => 'Movereasons', 'action' => 'view', $stockmove->movereason->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipper') ?></th>
            <td><?= $stockmove->has('shipper') ? $this->Html->link($stockmove->shipper->name, ['controller' => 'Shippers', 'action' => 'view', $stockmove->shipper->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Guide Number') ?></th>
            <td><?= h($stockmove->guide_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $stockmove->has('user') ? $this->Html->link($stockmove->user->name, ['controller' => 'Users', 'action' => 'view', $stockmove->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($stockmove->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Warehouse 2') ?></th>
            <td><?= h($stockmove->warehouse2->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receiver') ?></th>
            <td><?= $stockmove->has('userreceiver') ? $this->Html->link($stockmove->userreceiver->name, ['controller' => 'Users', 'action' => 'view', $stockmove->userreceiver->id]) : '' ?></td>
            
        </tr>
        <tr>
            <th scope="row"><?= __('Packages') ?></th>
            <td><?= $this->Number->format($stockmove->packages) ?></td>
        </tr>
        <!--<tr>
            <th scope="row"><?= __('Confirmed') ?></th>
            <td><?= $this->Number->format($stockmove->confirmed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Id') ?></th>
            <td><?= $this->Number->format($stockmove->parent_id) ?></td>
        </tr>-->
    </table>
	</div>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($stockmove->notes)); ?>
    </div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Stockmoves Details') ?>">
        <h4><?= __('Related Stockmoves Details') ?></h4>
        <?php if (!empty($stockmove->stockmoves_details)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Stockmove Id') ?></th>
                <th scope="col"><?= __('Item Id') ?></th>
                <th scope="col"><?= __('Itemcode Id') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col"><?= __('Deliverydate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($stockmove->stockmoves_details as $stockmovesDetails): ?>
            <tr>
                <td><?= h($stockmovesDetails->id) ?></td>
                <td><?= h($stockmovesDetails->stockmove_id) ?></td>
                <td><?= h($stockmovesDetails->item_id) ?></td>
                <td><?= h($stockmovesDetails->itemcode_id) ?></td>
                <td><?= h($stockmovesDetails->qty) ?></td>
                <td><?= h($stockmovesDetails->deliverydate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'StockmovesDetails', 'action' => 'view', $stockmovesDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'StockmovesDetails', 'action' => 'edit', $stockmovesDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'StockmovesDetails', 'action' => 'delete', $stockmovesDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stockmovesDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
