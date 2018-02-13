<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticket[]|\Cake\Collection\CollectionInterface $tickets
  */
?>

<div class="tickets index">

    <div class="boxContainer center">
    <ul class="myfilter">
      <li class="<?php if($this->request->session()->read('typeViewTickets') == 'default'){echo 'myfilterActive';} ?>" ><?= $this->Html->link(__('My Ticket'), ['controller' => 'Tickets', 'action' => 'index' ]) ?></li>
      <li class="<?php if($this->request->session()->read('typeViewTickets') == 'group'){echo 'myfilterActive';} ?>" ><?= $this->Html->link(__('My Group'), ['controller' => 'Tickets', 'action' => 'index' , 'group']) ?></li>
      <li class="<?php if($this->request->session()->read('typeViewTickets') == 'all'){echo 'myfilterActive';} ?>"><?= $this->Html->link(__('All Ticket'), ['controller' => 'Tickets', 'action' => 'index' ,'all']) ?></li>
    </ul>
  </div>

    <h3><?= __('Tickets') ?></h3>

    <div class="actions">
        <ul>
            <li><?= $this->Html->link(__('New Ticket'), ['action' => 'add'], ['escape' => false]) ?></li>
          <!--  <li><a id="mEdit"  class="multipleActions" title="Editar Multiples Tickets"><i class="fa fa-edit" aria-hidden="true"></i></a></li>
            <li><a id="mBorrar" class="multipleActions" title="Borrar Multiples Tickets"><i class="fa fa-eraser" aria-hidden="true"></i></a></li>
            <li><a id="mIP" class="multipleActions" title=" Convertir Incidente-Problema"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>-->
            <li><a id="mSC"class="multipleActions"  title="Convertir Incidente-Problema"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
      </ul>
    </div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" class="actions"><?= $this->Form->checkbox('checkAll', ['value'=> 0, 'id' => 'checkAll']); ?></th>
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
        <tbody id='tbodytickets'>

            <?php foreach ($tickets as $ticket):
                     $style = 'style="background: '.$ticket->tickettype->color . '"';
                ?>
            <tr >
                <td><?= $this->Form->checkbox('selected.', ['hiddenField' => false ,'class' => 'cb-element' ,'value' => $ticket->id]); ?></td>
                <td><?= $this->Number->format($ticket->id) ?></td>
                <td <?= $style ?>><?= $ticket->has('tickettype') ? ($ticket->tickettype->tag) : '' ?></td>
                <td><?= $ticket->has('ticket_status') ? ($ticket->ticket_status->name) : '' ?></td>
                <!--<td><?= $ticket->has('source') ? ($ticket->source->title) : '' ?></td>-->
                <td><?= h($ticket->title) ?></td>
                <!--<td><?= h($ticket->description) ?></td>
                <td><?= h($ticket->solution) ?></td>
                <td><?= $ticket->has('itemcode') ? ($ticket->itemcode->id) : '' ?></td>-->
                <td><?= $ticket->has('user') ? ($ticket->user->name) : '' ?></td>
                <td><?= $ticket->has('group') ? ($ticket->group->name) : '' ?></td>
                <td><?= $ticket->has('user_autor') ? ($ticket->userautor->name) : '' ?></td>

                <td><?= $ticket->has('user_requeried') ? ($ticket->userrequeried->name) : '' ?></td>


                <!--<td><?= $ticket->has('ticketimpact') ? ($ticket->ticketimpact->name) : '' ?></td>
                <td><?= $ticket->has('ticketurgency') ? ($ticket->ticketurgency->name) : '' ?></td>-->
                <td><?= $ticket->has('ticketpriority') ? ($ticket->ticketpriority->name) : '' ?></td>
                <td><?= $ticket->has('hdcategory') ? ($ticket->hdcategory->title) : '' ?></td>
                <td><?= h($ticket->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ticket->id]) ?>
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
<div id="debugOutput">
</div>

<script type="text/javascript">
    $("#checkAll").on('change', function () {
        $(".cb-element").prop('checked', $(this).prop("checked"));
        displayAction();
    });

    $("#tbodytickets").on('change','.cb-element',function () {
        _tot = $(".cb-element").length;
        _tot_checked = $(".cb-element:checked").length;
        displayAction();

        if(_tot != _tot_checked){
            $("#checkAll").prop('checked',false);
        }

        if(_tot == _tot_checked){
            $("#checkAll").prop('checked',true);
        }
    });

    function displayAction(){  // display actions for items selected
      var checkboxValues = [];
           $(".cb-element:checked").each(function(index, elem) {
               checkboxValues.push($(elem).val());
           });
        _tot_checked = $(".cb-element:checked").length;
        if (_tot_checked > 0) $('.arrayActions').show();
        else $('.arrayActions').hide();
        $('.countSelected').html(_tot_checked);
      //  $( "#debugOutput" ).text(checkboxValues + " are" + " checked!" );
        return checkboxValues;
    }


    $( ".multipleActions" ).click(function(){
      var opt= $(this).attr('id');
    $.ajax({
            url: '<?= $this->Url->build(['controller' => 'Tickets', 'action' => 'editchecked']) ?>',
            type: 'POST',
            data:  {value_to_send: displayAction(), operation: opt},


            success : function(data) {
              //console.log(data);// will alert "ok"
              // $('#debugOutput').append(data);
               location.reload();

            },
            error : function() {
                alert("Error de ajax");
            }
        });
      }
    );


</script>
