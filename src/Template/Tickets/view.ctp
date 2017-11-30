<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticket $ticket
  */
?>
<?= $this->element('helpdesktools') ?>
<div class="tickets view">
    <h3><?= h($ticket->title) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id]) ?> </li>
		</ul>
	</div>
	<div class="easyui-tabs">
	<div class="viewdata" title="<?= __('View Details') ?>">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tickettype') ?></th>
            <td><?= $ticket->has('tickettype') ? $this->Html->link($ticket->tickettype->name, ['controller' => 'Tickettypes', 'action' => 'view', $ticket->tickettype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticket Status') ?></th>
            <td><?= $ticket->has('ticket_status') ? $this->Html->link($ticket->ticket_status->name, ['controller' => 'Ticketstatuses', 'action' => 'view', $ticket->ticket_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source') ?></th>
            <td><?= $ticket->has('source') ? $this->Html->link($ticket->source->title, ['controller' => 'Sources', 'action' => 'view', $ticket->source->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($ticket->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($ticket->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Solution') ?></th>
            <td><?= h($ticket->solution) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Itemcode') ?></th>
            <td><?= $ticket->has('itemcode') ? $this->Html->link($ticket->itemcode->name, ['controller' => 'Itemcodes', 'action' => 'view', $ticket->itemcode->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ticket->has('user') ? $this->Html->link($ticket->user->name, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $ticket->has('group') ? $this->Html->link($ticket->group->name, ['controller' => 'Groups', 'action' => 'view', $ticket->group->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticketimpact') ?></th>
            <td><?= $ticket->has('ticketimpact') ? $this->Html->link($ticket->ticketimpact->name, ['controller' => 'Ticketimpacts', 'action' => 'view', $ticket->ticketimpact->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticketurgency') ?></th>
            <td><?= $ticket->has('ticketurgency') ? $this->Html->link($ticket->ticketurgency->name, ['controller' => 'Ticketurgencies', 'action' => 'view', $ticket->ticketurgency->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ticketpriority') ?></th>
            <td><?= $ticket->has('ticketpriority') ? $this->Html->link($ticket->ticketpriority->name, ['controller' => 'Ticketpriorities', 'action' => 'view', $ticket->ticketpriority->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Ticket') ?></th>
            <td><?= $ticket->has('parent_ticket') ? $this->Html->link($ticket->parent_ticket->title, ['controller' => 'Tickets', 'action' => 'view', $ticket->parent_ticket->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hdcategory') ?></th>
            <td><?= $ticket->has('hdcategory') ? $this->Html->link($ticket->hdcategory->title, ['controller' => 'Hdcategories', 'action' => 'view', $ticket->hdcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ip') ?></th>
            <td><?= h($ticket->ip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticket->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Autor') ?></th>
            <td><?= $this->Number->format($ticket->user_autor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Requeried') ?></th>
            <td><?= $this->Number->format($ticket->user_requeried) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ticket->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ticket->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Branche') ?></th>
            <td><?= h($ticket->branche) ?></td>
        </tr>
    </table>

    <div class="row">
        <h4><?= __('Resolution') ?></h4>
        <?= $this->Text->autoParagraph(h($ticket->resolution)); ?>
    </div>
</div>

   <!--Modificar -->
    <div class="related" title="<?= __('Ticketnotes') ?>">
      <div class="actions">
        <ul>
          <li><?= $this->Html->link(__('New Ticketnotes'), ['action' => 'add']) ?> </li>
        </ul>
      </div>
        <?php if (!empty($ticket->ticketnotes)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Ticket Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($ticket->ticketnotes as $ticketnotes): ?>
            <tr>
                <td><?= h($ticketnotes->id) ?></td>
                <td><?= h($ticketnotes->description) ?></td>
                <td><?= h($ticketnotes->ticket_id) ?></td>
                <td><?= h($ticketnotes->user_id) ?></td>
                <td><?= h($ticketnotes->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Publicnotes', 'action' => 'view', $ticketnotes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Publicnotes', 'action' => 'edit', $ticketnotes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Publicnotes', 'action' => 'delete', $ticketnotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketnotes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Ticketlogs') ?>">
      <div class="actions">
        <ul>
          <li><?= $this->Html->link(__('New ticketlogs'), ['action' => 'add']) ?> </li>
        </ul>
      </div>
        <?php if (!empty($ticket->ticketlogs)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ticket Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('User Transfer') ?></th>
                <th scope="col"><?= __('Group Transfer') ?></th>
                <th scope="col"><?= __('New Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Coments') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($ticket->ticketlogs as $ticketlogs): ?>
            <tr>
                <td><?= h($ticketlogs->id) ?></td>
                <td><?= h($ticketlogs->ticket_id) ?></td>
                <td><?= h($ticketlogs->user_id) ?></td>
                <td><?= h($ticketlogs->group_id) ?></td>
                <td><?= h($ticketlogs->user_transfer) ?></td>
                <td><?= h($ticketlogs->group_transfer) ?></td>
                <td><?= h($ticketlogs->new_status) ?></td>
                <td><?= h($ticketlogs->created) ?></td>
                <td><?= h($ticketlogs->coments) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ticketlogs', 'action' => 'view', $ticketlogs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ticketlogs', 'action' => 'edit', $ticketlogs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ticketlogs', 'action' => 'delete', $ticketlogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketlogs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Ticketmarkeds') ?>">
        <h4><?= __('Related Ticketmarkeds') ?></h4>
        <?php if (!empty($ticket->ticketmarkeds)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Ticket Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($ticket->ticketmarkeds as $ticketmarkeds): ?>
            <tr>
                <td><?= h($ticketmarkeds->id) ?></td>
                <td><?= h($ticketmarkeds->user_id) ?></td>
                <td><?= h($ticketmarkeds->ticket_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ticketmarkeds', 'action' => 'view', $ticketmarkeds->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ticketmarkeds', 'action' => 'edit', $ticketmarkeds->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ticketmarkeds', 'action' => 'delete', $ticketmarkeds->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketmarkeds->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Tickets') ?>">
        <h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($ticket->child_tickets)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tickettype Id') ?></th>
                <th scope="col"><?= __('Ticket Status Id') ?></th>
                <th scope="col"><?= __('Source Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($ticket->child_tickets as $childTickets): ?>
            <tr>
                <td><?= h($childTickets->id) ?></td>
                <td><?= h($childTickets->tickettype_id) ?></td>
                <td><?= h($childTickets->ticket_status_id) ?></td>
                <td><?= h($childTickets->source_id) ?></td>
                <td><?= h($childTickets->title) ?></td>
                <td><?= h($childTickets->description) ?></td>
                <td><?= h($childTickets->solution) ?></td>
                <td><?= h($childTickets->resolution) ?></td>
                <td><?= h($childTickets->itemcode_id) ?></td>
                <td><?= h($childTickets->user_id) ?></td>
                <td><?= h($childTickets->group_id) ?></td>
                <td><?= h($childTickets->user_autor) ?></td>
                <td><?= h($childTickets->user_requeried) ?></td>
                <td><?= h($childTickets->created) ?></td>
                <td><?= h($childTickets->ticketimpact_id) ?></td>
                <td><?= h($childTickets->ticketurgency_id) ?></td>
                <td><?= h($childTickets->ticketpriority_id) ?></td>
                <td><?= h($childTickets->parent_id) ?></td>
                <td><?= h($childTickets->hdcategory_id) ?></td>
                <td><?= h($childTickets->modified) ?></td>
                <td><?= h($childTickets->ip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $childTickets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $childTickets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $childTickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childTickets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
    <div class="related" title="<?= __('Branches') ?>">
        <h4><?= __('Related Branches') ?></h4>
        <?php if (!empty($ticket->branches)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Branchgroup') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($ticket->branches as $branches): ?>
            <tr>
                <td><?= h($branches->id) ?></td>
                <td><?= h($branches->name) ?></td>
                <td><?= h($branches->branchgroup_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Branches', 'action' => 'view', $branches->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Branches', 'action' => 'edit', $branches->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Branches', 'action' => 'delete', $branches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branches->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <?php endif; ?>
    </div>
    
    </div>
</div>
</div>
