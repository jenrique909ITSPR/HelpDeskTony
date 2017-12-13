<div class="tickets index">

  <h3><?= __('My Tickets') ?></h3>

  <table cellpadding="0" cellspacing="0">
      <thead>
          <tr>
              <th scope="col"><?= $this->Paginator->sort('tickettype_id') ?></th>
              <th scope="col"><?= $this->Paginator->sort('#') ?></th>
              <th scope="col"><?= $this->Paginator->sort('ticket_status_id') ?></th>
              <th scope="col"><?= $this->Paginator->sort('title') ?></th>
              <th scope="col"><?= $this->Paginator->sort('solution') ?></th>
              <th scope="col"><?= $this->Paginator->sort('user_requeried') ?></th>
              <th scope="col"><?= $this->Paginator->sort('hdcategory_id') ?></th>
              <th scope="col"><?= $this->Paginator->sort('created') ?></th>
              <th scope="col" class="actions"><?= __('Actions') ?></th>
          </tr>
      </thead>
      <tbody>
          <?php foreach ($tickets as $ticket):
               $style = 'style="background: '.$ticket->tickettype->color . '"';
               //$style = "";
          ?>
          <tr >
              <td <?= $style ?>><?= $ticket->has('tickettype') ? ($ticket->tickettype->name) : '' ?></td>
              <td><?= $this->Number->format($ticket->id) ?></td>
              <td><?= $ticket->has('ticket_status') ? ($ticket->ticket_status->name) : '' ?></td>
              <td><?= h($ticket->title) ?></td>
              <td><?= h($ticket->solution) ?></td>
              <td><?= $this->Number->format($ticket->user_requeried) ?></td>
              <td><?= $ticket->has('hdcategory') ? ($ticket->hdcategory->title) : '' ?></td>
              <td><?= h($ticket->created) ?></td>
              <td class="actions">
                  <?= $this->Html->link(__('View'), ['action' => 'enduserview', $ticket->id]) ?>
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
