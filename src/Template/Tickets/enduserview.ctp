<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticket $ticket
  */
?>

<div class="tickets view">
    <h3><?= $ticket->tickettype->name . ' #' . $this->Number->format($ticket->id) . ' - ' . h($ticket->title) ?></h3>
	<div class="actions">
		<ul>
			<!--<li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>-->
			<li><?= $this->Html->link(__('My Tickets'), ['action' => 'enduserindex']) ?> </li>
			<!--<li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id]) ?> </li>-->
		</ul>
	</div>
	<div class="easyui-tabs">
	<div class="viewdata" title="<?= __('View Details') ?>">
    <table class="vertical-table">
        <!--<tr>
            <th scope="row"><?= __('Tickettype') ?></th>
            <td><?= $ticket->has('tickettype') ? $this->Html->link($ticket->tickettype->name, ['controller' => 'Tickettypes', 'action' => 'view', $ticket->tickettype->id]) : '' ?></td>
        </tr>-->
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
        <!--<tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ticket->has('user') ? $this->Html->link($ticket->user->name, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $ticket->has('group') ? $this->Html->link($ticket->group->name, ['controller' => 'Groups', 'action' => 'view', $ticket->group->id]) : '' ?></td>
        </tr>-->
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
        <!--<tr>
            <th scope="row"><?= __('Ip') ?></th>
            <td><?= h($ticket->ip) ?></td>
        </tr>-->
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
    </table>

    <div class="row">
        <h4><?= __('Resolution') ?></h4>
        <?= $this->Text->autoParagraph(h($ticket->resolution)); ?>
    </div>
</div>


    <div class="related" title="<?= __('Publicnotes') ?>">
      <div class="actions">
        <ul>
          <li><?= $this->Html->link(__('New publicnotes'), ['action' => 'add']) ?> </li>
        </ul>
      </div>
        <?php if (!empty($ticket->publicnotes)): ?>
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
            <?php foreach ($ticket->publicnotes as $publicnotes): ?>
            <tr>
                <td><?= h($publicnotes->id) ?></td>
                <td><?= h($publicnotes->name) ?></td>
                <td><?= h($publicnotes->ticket_id) ?></td>
                <td><?= h($publicnotes->user_id) ?></td>
                <td><?= h($publicnotes->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Publicnotes', 'action' => 'view', $publicnotes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Publicnotes', 'action' => 'edit', $publicnotes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Publicnotes', 'action' => 'delete', $publicnotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publicnotes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>

    <div class="related" title="<?= __('Ticketsfiles') ?>">
      <div class="actions">
        <ul>
          <li><?= $this->Html->link(__('New ticketsfiles'), ['action' => 'add']) ?> </li>
        </ul>
      </div>
        <?php if (!empty($ticket->ticketsfiles)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Ticket Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($ticket->ticketsfiles as $ticketsfiles): ?>
            <tr>
                <td><?= h($ticketsfiles->id) ?></td>
                <td><?= h($ticketsfiles->name) ?></td>
                <td><?= h($ticketsfiles->ticket_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ticketsfiles', 'action' => 'view', $ticketsfiles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ticketsfiles', 'action' => 'edit', $ticketsfiles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ticketsfiles', 'action' => 'delete', $ticketsfiles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketsfiles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>