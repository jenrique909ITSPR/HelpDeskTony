<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Branch $branch  */
?>

<div class="branches view">
    <h3><?= h($branch->NOMBRE) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Branch'), ['action' => 'delete', $branch->SUCURSAL], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Branch'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Branches'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Branch'), ['action' => 'edit', $branch->SUCURSAL]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($branch->NOMBRE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Branchgroup') ?></th>
            <td><?= $branch->has('branchgroup') ? $this->Html->link($branch->branchgroup->name, ['controller' => 'Branchgroups', 'action' => 'view', $branch->branchgroup->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $branch->has('company') ? $this->Html->link($branch->company->Nombre, ['controller' => 'Companies', 'action' => 'view', $branch->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($branch->SUCURSAL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('email') ?></th>
            <td><?= h($branch->EMAIL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($branch->Telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IP') ?></th>
            <td><?= h($branch->IP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('status') ?></th>
            <td><?= h($branch->B_ESTATUS) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Layouts') ?>">
        <h4><?= __('Related Layouts') ?></h4>
        <?php if (!empty($branch->layouts)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Branch Id') ?></th>
                <th scope="col"><?= __('Position Id') ?></th>
                <th scope="col"><?= __('Layout') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($branch->layouts as $layouts): ?>
            <tr>
                <td><?= h($layouts->id) ?></td>
                <td><?= h($layouts->branch_id) ?></td>
                <td><?= h($layouts->position_id) ?></td>
                <td><?= h($layouts->layout) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Layouts', 'action' => 'view', $layouts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Layouts', 'action' => 'edit', $layouts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Layouts', 'action' => 'delete', $layouts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layouts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Positionbranches') ?>">
        <h4><?= __('Related Positionbranches') ?></h4>
        <?php if (!empty($branch->positionbranches)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Branch Id') ?></th>
                <th scope="col"><?= __('Position Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($branch->positionbranches as $positionbranches): ?>
            <tr>
                <td><?= h($positionbranches->id) ?></td>
                <td><?= h($positionbranches->branch_id) ?></td>
                <td><?= h($positionbranches->position_id) ?></td>
                <td><?= h($positionbranches->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Positionbranches', 'action' => 'view', $positionbranches->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Positionbranches', 'action' => 'edit', $positionbranches->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Positionbranches', 'action' => 'delete', $positionbranches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positionbranches->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Tickets') ?>">
        <h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($branch->tickets)): ?>
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
            <?php foreach ($branch->tickets as $tickets): ?>
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
    <div class="related" title="<?= __('Warehouses') ?>">
        <h4><?= __('Related Warehouses') ?></h4>
        <?php if (!empty($branch->warehouses)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Branch Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($branch->warehouses as $warehouses): ?>
            <tr>
                <td><?= h($warehouses->id) ?></td>
                <td><?= h($warehouses->name) ?></td>
                <td><?= h($warehouses->branch_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Warehouses', 'action' => 'view', $warehouses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Warehouses', 'action' => 'edit', $warehouses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Warehouses', 'action' => 'delete', $warehouses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $warehouses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
