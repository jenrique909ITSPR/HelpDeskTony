<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Itemcode $itemcode  */
?>

<div class="itemcodes view">
    <h3><?= h($itemcode->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Itemcode'), ['action' => 'delete', $itemcode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemcode->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Itemcode'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Itemcodes'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Itemcode'), ['action' => 'edit', $itemcode->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $itemcode->has('item') ? $this->Html->link($itemcode->item->name, ['controller' => 'Items', 'action' => 'view', $itemcode->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serial') ?></th>
            <td><?= h($itemcode->serial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice') ?></th>
            <td><?= $itemcode->has('invoice') ? $this->Html->link($itemcode->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $itemcode->invoice->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Statusitem') ?></th>
            <td><?= $itemcode->has('statusitem') ? $this->Html->link($itemcode->statusitem->name, ['controller' => 'Statusitems', 'action' => 'view', $itemcode->statusitem->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Positionbranch') ?></th>
            <td><?= $itemcode->has('positionbranch') ? $this->Html->link($itemcode->positionbranch->name, ['controller' => 'Positionbranches', 'action' => 'view', $itemcode->positionbranch->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service Tag') ?></th>
            <td><?= h($itemcode->service_tag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Currency') ?></th>
            <td><?= $itemcode->has('currency') ? $this->Html->link($itemcode->currency->name, ['controller' => 'Currencies', 'action' => 'view', $itemcode->currency->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Insured') ?></th>
            <td><?= $itemcode->has('insured') ? $this->Html->link($itemcode->insured->name, ['controller' => 'Insureds', 'action' => 'view', $itemcode->insured->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($itemcode->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= $this->Number->format($itemcode->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($itemcode->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Warranty') ?></th>
            <td><?= h($itemcode->warranty) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Stockmoves Details') ?>">
        <h4><?= __('Related Stockmoves Details') ?></h4>
        <?php if (!empty($itemcode->stockmoves_details)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('warehouse') ?></th>
                <th scope="col"><?= __('warehouse 2') ?></th>
                <th scope="col"><?= __('movereason') ?></th>
                <th scope="col"><?= __('user') ?></th>
                <th scope="col"><?= __('reason') ?></th>
                <th scope="col"><?= __('date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($itemcode->stockmoves_details as $stockmovesDetails): ?>
            <tr>
                <td><?= h($stockmovesDetails->stockmove->warehouse->name) ?></td>
                <td><?= h($stockmovesDetails->stockmove->warehouse2->name) ?></td>
                <td><?= h($stockmovesDetails->stockmove->movereason->name) ?></td>
                <td><?= h($stockmovesDetails->stockmove->user->name) ?></td>
                <td><?= h($stockmovesDetails->stockmove->notes) ?></td>
                <td><?= h($stockmovesDetails->stockmove->created) ?></td>
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
    <div class="related" title="<?= __('Tickets') ?>">
        <h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($itemcode->tickets)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tickettype Id') ?></th>
                <th scope="col"><?= __('Ticket Status Id') ?></th>
                <th scope="col"><?= __('Source Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Solution') ?></th>
                <th scope="col"><?= __('Resolution') ?></th>
                <th scope="col"><?= __('Itemcode Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('User Autor') ?></th>
                <th scope="col"><?= __('User Requeried') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Ticketimpact Id') ?></th>
                <th scope="col"><?= __('Ticketurgency Id') ?></th>
                <th scope="col"><?= __('Ticketpriority Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Hdcategory Id') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Ip') ?></th>
                <th scope="col"><?= __('Branch Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($itemcode->tickets as $tickets): ?>
            <tr>
                <td><?= h($tickets->id) ?></td>
                <td><?= h($tickets->tickettype_id) ?></td>
                <td><?= h($tickets->ticket_status_id) ?></td>
                <td><?= h($tickets->source_id) ?></td>
                <td><?= h($tickets->title) ?></td>
                <td><?= h($tickets->solution) ?></td>
                <td><?= h($tickets->resolution) ?></td>
                <td><?= h($tickets->itemcode_id) ?></td>
                <td><?= h($tickets->user_id) ?></td>
                <td><?= h($tickets->group_id) ?></td>
                <td><?= h($tickets->user_autor) ?></td>
                <td><?= h($tickets->user_requeried) ?></td>
                <td><?= h($tickets->created) ?></td>
                <td><?= h($tickets->ticketimpact_id) ?></td>
                <td><?= h($tickets->ticketurgency_id) ?></td>
                <td><?= h($tickets->ticketpriority_id) ?></td>
                <td><?= h($tickets->parent_id) ?></td>
                <td><?= h($tickets->hdcategory_id) ?></td>
                <td><?= h($tickets->modified) ?></td>
                <td><?= h($tickets->ip) ?></td>
                <td><?= h($tickets->branch_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>

