<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Hdcategory $hdcategory  */
?>

<div class="hdcategories view">
    <h3><?= h($hdcategory->title) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Hdcategory'), ['action' => 'delete', $hdcategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hdcategory->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Hdcategory'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Hdcategories'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Hdcategory'), ['action' => 'edit', $hdcategory->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($hdcategory->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Hdcategory') ?></th>
            <td><?= $hdcategory->has('parent_hdcategory') ? $this->Html->link($hdcategory->parent_hdcategory->title, ['controller' => 'Hdcategories', 'action' => 'view', $hdcategory->parent_hdcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($hdcategory->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hdcategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lft') ?></th>
            <td><?= $this->Number->format($hdcategory->lft) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rght') ?></th>
            <td><?= $this->Number->format($hdcategory->rght) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Hdcategories') ?>">
        <h4><?= __('Related Hdcategories') ?></h4>
        <?php if (!empty($hdcategory->child_hdcategories)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Lft') ?></th>
                <th scope="col"><?= __('Rght') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($hdcategory->child_hdcategories as $childHdcategories): ?>
            <tr>
                <td><?= h($childHdcategories->id) ?></td>
                <td><?= h($childHdcategories->title) ?></td>
                <td><?= h($childHdcategories->parent_id) ?></td>
                <td><?= h($childHdcategories->lft) ?></td>
                <td><?= h($childHdcategories->rght) ?></td>
                <td><?= h($childHdcategories->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Hdcategories', 'action' => 'view', $childHdcategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Hdcategories', 'action' => 'edit', $childHdcategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hdcategories', 'action' => 'delete', $childHdcategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childHdcategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Hdtemplate') ?>">
        <h4><?= __('Related Hdtemplate') ?></h4>
        <?php if (!empty($hdcategory->hdtemplate)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Hdcategory Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($hdcategory->hdtemplate as $hdtemplate): ?>
            <tr>
                <td><?= h($hdtemplate->id) ?></td>
                <td><?= h($hdtemplate->title) ?></td>
                <td><?= h($hdtemplate->hdcategory_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Hdtemplate', 'action' => 'view', $hdtemplate->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Hdtemplate', 'action' => 'edit', $hdtemplate->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hdtemplate', 'action' => 'delete', $hdtemplate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hdtemplate->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Tickets') ?>">
        <h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($hdcategory->tickets)): ?>
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
            <?php foreach ($hdcategory->tickets as $tickets): ?>
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
    <div class="related" title="<?= __('Articles') ?>">
        <h4><?= __('Related Articles') ?></h4>
        <?php if (!empty($hdcategory->articles)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Answer') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Selected') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($hdcategory->articles as $articles): ?>
            <tr>
                <td><?= h($articles->id) ?></td>
                <td><?= h($articles->title) ?></td>
                <td><?= h($articles->answer) ?></td>
                <td><?= h($articles->modified) ?></td>
                <td><?= h($articles->user_id) ?></td>
                <td><?= h($articles->created) ?></td>
                <td><?= h($articles->selected) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articles', 'action' => 'view', $articles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articles', 'action' => 'edit', $articles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articles', 'action' => 'delete', $articles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
