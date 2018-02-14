<script type="text/javascript">
$(document).ready(function() {
  $("tr.selectrow").on('click', function() {
        var href = $(this).find("a").attr("href");
        if (href) {
            window.location = href;
            //alert("You clicked my <tr>: " + href);
        }
    });
  });
</script>

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
              <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
          </tr>
      </thead>
      <tbody>
          <?php foreach ($tickets as $ticket):
               $style = 'style="background: '.$ticket->tickettype->color . '"';
               //$style = "";
          ?>
          <tr class="selectrow">
              <td <?= $style ?>><?= $ticket->has('tickettype') ? ($ticket->tickettype->name) : '' ?></td>
              <td><?= $this->Html->link($this->Number->format($ticket->id) , ['action' => 'enduserview', $ticket->id]) ?></td>
              <td><?= $ticket->has('ticket_status') ? ($ticket->ticket_status->name) : '' ?></td>
              <td><?= h($ticket->title) ?></td>
              <td><?= h($ticket->solution) ?></td>
              <td><?= h($ticket->userrequeried->name) ?></td>
              <td><?= $ticket->has('hdcategory') ? ($ticket->hdcategory->title) : '' ?></td>
              <td><?= h($ticket->created) ?></td>
              <!--<td class="actions">
                  <?= $this->Html->link(__('View'), ['action' => 'enduserview', $ticket->id]) ?>
              </td>-->
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
