<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticket[]|\Cake\Collection\CollectionInterface $tickets
  */
?>

<div class="tickets index">
<<<<<<< HEAD
  <h3><?= __('Tickets') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
		</ul>
	</div>
=======
    <h3><?= __('Tickets') ?></h3>
    <div class="actions">
        <ul>
            <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
        </ul>
    </div>
>>>>>>> 49253f55a96d2eb4c4968531cbf3ee2349ab4e66
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
				<th scope="col" class="actions"><?= $this->Form->checkbox('selectedAll', ['hiddenField' => false]); ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tickettype_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticket_status_id') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('source_id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('solution') ?></th>
                <th scope="col"><?= $this->Paginator->sort('itemcode_id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_autor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_requeried') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('ticketimpact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ticketurgency_id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('ticketpriority_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hdcategory_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($tickets as $ticket):
<<<<<<< HEAD
      			     $style = 'style="background: '.$ticket->tickettype->color . '"';
      			?>
            <tr >
				        <td><?= $this->Form->checkbox('selected.', ['hiddenField' => false]); ?></td>
                <td><?= $this->Number->format($ticket->id) ?></td>
                <td <?= $style ?>><?= $ticket->has('tickettype') ? ($ticket->tickettype->name) : '' ?></td>
                <td><?= $ticket->has('ticket_status') ? ($ticket->ticket_status->name) : '' ?></td>
                <!--<td><?= $ticket->has('source') ? ($ticket->source->title) : '' ?></td>-->
                <td><?= h($ticket->title) ?></td>
                <!--<td><?= h($ticket->description) ?></td>
                <td><?= h($ticket->solution) ?></td>
                <td><?= $ticket->has('itemcode') ? ($ticket->itemcode->id) : '' ?></td>-->
                <td><?= $ticket->has('user') ? ($ticket->user->name) : '' ?></td>
                <td><?= $ticket->has('group') ? ($ticket->group->name) : '' ?></td>
                <td><?= $this->Number->format($ticket->user_autor) ?></td>
                <td><?= $this->Number->format($ticket->user_requeried) ?></td>
                <!--<td><?= $ticket->has('ticketimpact') ? ($ticket->ticketimpact->name) : '' ?></td>
                <td><?= $ticket->has('ticketurgency') ? ($ticket->ticketurgency->name) : '' ?></td>-->
                <td><?= $ticket->has('ticketpriority') ? ($ticket->ticketpriority->name) : '' ?></td>
                <td><?= $ticket->has('hdcategory') ? ($ticket->hdcategory->title) : '' ?></td>
                <td><?= h($ticket->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>
                </td>
=======

              $color= $ticket->tickettype->color;

            ?>
            <tr>
            <td style= "background-color:  <?php echo $color ?> "><?= $this->Number->format($ticket->id) ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $ticket->has('tickettype') ? $this->Html->link($ticket->tickettype->name, ['controller' => 'Tickettypes', 'action' => 'view', $ticket->tickettype->id]) : ''  ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $ticket->has('ticket_status') ? $this->Html->link($ticket->ticket_status->name, ['controller' => 'Ticketstatuses', 'action' => 'view', $ticket->ticket_status->id]) : '' ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $ticket->has('source') ? $this->Html->link($ticket->source->title, ['controller' => 'Sources', 'action' => 'view', $ticket->source->id]) : ''  ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= h($ticket->title) ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= h($ticket->description) ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= h($ticket->solution) ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $ticket->has('itemcode') ? $this->Html->link($ticket->itemcode->id, ['controller' => 'Itemcodes', 'action' => 'view', $ticket->itemcode->id]) : '' ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $ticket->has('user') ? $this->Html->link($ticket->user->name, ['controller' => 'Users', 'action' => 'view', $ticket->user->id]) : '' ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $ticket->has('group') ? $this->Html->link($ticket->group->name, ['controller' => 'Groups', 'action' => 'view', $ticket->group->id]) : '' ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $this->Number->format($ticket->user_autor) ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $this->Number->format($ticket->user_requeried) ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= h($ticket->created) ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $ticket->has('ticketimpact') ? $this->Html->link($ticket->ticketimpact->name, ['controller' => 'Ticketimpacts', 'action' => 'view', $ticket->ticketimpact->id]) : '' ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $ticket->has('ticketurgency') ? $this->Html->link($ticket->ticketurgency->name, ['controller' => 'Ticketurgencies', 'action' => 'view', $ticket->ticketurgency->id]) : '' ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $ticket->has('ticketpriority') ? $this->Html->link($ticket->ticketpriority->name, ['controller' => 'Ticketpriorities', 'action' => 'view', $ticket->ticketpriority->id]) : '' ?></td>
             <td style= "background-color:  <?php echo $color ?> "><?= h($ticket->parent_id) ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $this->Number->format($ticket->parent_id) ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= $ticket->has('hdcategory') ? $this->Html->link($ticket->hdcategory->title, ['controller' => 'Hdcategories', 'action' => 'view', $ticket->hdcategory->id]) : '' ?></td>
            <td style= "background-color:  <?php echo $color ?> "><?= h($ticket->modified) ?></td>
            <td class="actions" style= "background-color:  <?php echo $color ?> ">
                <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ticket->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?>
            </td>
>>>>>>> 49253f55a96d2eb4c4968531cbf3ee2349ab4e66
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

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tickettypes'), ['controller' => 'Tickettypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tickettype'), ['controller' => 'Tickettypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticket Statuses'), ['controller' => 'Ticketstatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticket Status'), ['controller' => 'Ticketstatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Itemcodes'), ['controller' => 'Itemcodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Itemcode'), ['controller' => 'Itemcodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketimpacts'), ['controller' => 'Ticketimpacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketimpact'), ['controller' => 'Ticketimpacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketurgencies'), ['controller' => 'Ticketurgencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketurgency'), ['controller' => 'Ticketurgencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketpriorities'), ['controller' => 'Ticketpriorities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketpriority'), ['controller' => 'Ticketpriorities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hdcategories'), ['controller' => 'Hdcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hdcategory'), ['controller' => 'Hdcategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internalnotes'), ['controller' => 'Internalnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internalnote'), ['controller' => 'Internalnotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Publicnotes'), ['controller' => 'Publicnotes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Publicnote'), ['controller' => 'Publicnotes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketlogs'), ['controller' => 'Ticketlogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketlog'), ['controller' => 'Ticketlogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ticketsfiles'), ['controller' => 'Ticketsfiles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ticketsfile'), ['controller' => 'Ticketsfiles', 'action' => 'add']) ?></li>
    </ul>
</nav>
