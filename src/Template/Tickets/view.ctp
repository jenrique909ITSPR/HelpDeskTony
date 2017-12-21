<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticket $ticket
  */
?>
<?= $this->element('helpdesktools') ?>
<div class="tickets view">
    <h3><?= $ticket->tickettype->name .' #'.$this->Number->format($ticket->id).' - '.h($ticket->title) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Ticket'), ['action' => 'delete', $ticket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticket->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Ticket'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Ticket'), ['action' => 'edit', $ticket->id]) ?> </li>
		</ul>
	</div>

  <!--Modificar -->
   <!--<div class="easyui-tabs">
	<div class="viewdata" title="<?= __('View Details') ?>">
    <table class="vertical-table">
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
            <th scope="row"><?= __('Solution') ?></th>
            <td><?= h($ticket->solution) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Itemcode') ?></th>
            <td><?= $ticket->has('itemcode') ? $this->Html->link($ticket->itemcode->name, ['controller' => 'Itemcodes', 'action' => 'view', $ticket->itemcode]) : '' ?></td>
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
            <th scope="row"><?= __('User Autor') ?></th>
            <td><?= h($ticket->userautor->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Requiered') ?></th>
            <td><?= h($ticket->userrequeried->name) ?></td>
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
            <th scope="row"><?= __('Branch') ?></th>
            <td><?= h($ticket->branch->name) ?></td>
        </tr>
    </table>

    <div class="row">
        <h4><?= __('Resolution') ?></h4>
        <?= $this->Text->autoParagraph(h($ticket->resolution)); ?>
    </div>
</div>

   <div class="related" title="<?= __('Ticketnotes') ?>">
      <div class="actions">
        <ul>
          <li><?= $this->Html->link(__('New Ticketnotes'), ['controller' => 'Ticketnotes', 'action' => 'add']) ?> </li>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'Ticketnotes', 'action' => 'view', $ticketnotes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ticketnotes', 'action' => 'edit', $ticketnotes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ticketnotes', 'action' => 'delete', $ticketnotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketnotes->id)]) ?>
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

    </div>-->

    <!--<div >
      <?= __('Created') . ' ' . h($ticket->created) . ' by ' . $this->Number->format($ticket->user_autor); ?>
      <br  /><?= __('Modified') . ": " . h($ticket->modified) ?>
    </div>-->


 <?= $this->Form->create($ticket) ?>
<div class="easyui-layout"  style="width:100%;height:1100px;">
        <div  id="p" data-options="region:'west',collapsible:false"style="width:20%;padding:10px">
            <!--<a class="easyui-linkbutton" onclick="colapsar()">CollapseAll</a>-->
            <ul class="easyui-tree" data-options="animate:true,lines:true" id="tt"/> 
        </div>
        <div data-options="region:'center'"  style="width:100%;"">
             <div class="editdata">
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Hdcategory')) ?></td>
                        <td style="width: 88%;"><?php echo $this->Form->control('hdcategory_id',[ 'label' => false ,'id' => 'hdcategory_id' , 'disabled' => 'true']); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Source')) ?></td>
                        <td style="width: 88%;"><?php  echo $this->Form->control('source_id', ['label' => false ,'options' => $sources, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Branch')) ?></td>
                        <td style="width: 88%;"><?php echo $this->Form->control('branche_id', ['label' => false ,'options' => $branches, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Ticket Status')) ?></td>
                        <td style="width: 88%;"><?php echo  $this->Form->control('ticket_status_id', ['label' => false ,'options' => $ticketStatuses, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Ticket Impact')) ?></td>
                        <td style="width: 88%;"><?php  echo $this->Form->control('ticketimpact_id', ['label' => false ,'options' => $ticketimpacts, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Ticket Urgency')) ?></td>
                        <td style="width: 88%;"><?php  echo $this->Form->control('ticketurgency_id', ['label' => false ,'options' => $ticketurgencies, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Ticket Priority')) ?></td>
                        <td style="width: 88%;"><?php  echo $this->Form->control('ticketpriority_id', ['label' => false ,'options' => $ticketpriorities, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('User Autor')) ?></td>
                        <td style="width: 88%;"><?php   echo $this->Form->control('user_autor',['label' => false ]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('User Requiered')) ?></td>
                        <td style="width: 88%;"><?php echo $this->Form->control('user_requeried',['label' => false ]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('User')) ?></td>
                        <td style="width: 88%;"><?php  echo $this->Form->control('user_id', ['label' => false ,'options' => $users, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Group')) ?></td>
                        <td style="width: 88%;"><?php   echo $this->Form->control('group_id', ['label' => false ,'options' => $groups, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Parent')) ?></td>
                        <td style="width: 88%;"><?php  echo $this->Form->control('parent_id', ['label' => false ,'options' => $parentTickets, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Ip')) ?></td>
                        <td style="width: 88%;"><?php   echo $this->Form->control('ip',['label' => false ]);  ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Itemcode')) ?></td>
                        <td style="width: 88%;"><?php echo $this->Form->control('itemcode_id', ['label' => false ,'options' => $itemcodes, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Resolution')) ?></td>
                        <td style="width: 88%;"><?php echo $this->Form->control('resolution',['label' => false ]); ?></td>
                    </tr>
                    <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Solution')) ?></td>
                        <td style="width: 88%;"><?php echo $this->Form->control('solution',['label' => false ]); ?></td>
                    </tr>
                </tbody>
            </table>
            
            <?= $this->Form->button(__('Submit')) ?>
            </div>
        </div>
    </div>
<?= $this->Form->end() ?>


    <h4><?= __('Add information') ?></h4>
    <div class="editdata">
      <?= $this->Form->create('ticketnote', ['url' => ['controller' => 'Ticketnotes', 'action' => 'add']]) ?>
          <?php
              echo $this->Form->control('ticketnotestype_id', ['options' => $ticketnotestypes]);
              echo $this->Form->textarea('description');
              //echo $this->Form->control('ticket_id', ['options' => $tickets, 'empty' => true]);
              //echo $this->Form->control('user_id', ['options' => $users]);

          ?>

      <?= $this->Form->button(__('Submit')) ?>
      <?= $this->Form->end() ?>
    </div>

    <h4 class=""><?= __('Tracking Text') ?></h4>
    <div class="related clearfix" title="<?= __('Ticketnotes') ?>">
      <?php if (!empty($ticket->ticketnotes)): ?>
        <?php foreach ($ticket->ticketnotes as $ticketnotes): ?>
          <div class="viewticketnotes <?= ($this->request->session()->read('Auth.User.id') == $ticketnotes->user_id) ? '' : 'tech'?> ">
            <div class="clearfix">
              <div class="left">
                <span class="noteauthor"><?= h($ticketnotes->id) ?></span> | <?= h($ticketnotes->created) ?>
              </div>
              <?php if ($ticketnotes->ticketnotestype_id == 2): ?>
              <div class="noteinternal right">
                <?= __('Internal Note') ?>
              </div>
              <?php endif; ?>
            </div>
            <div class="notes">
              <?= h($ticketnotes->description) ?>
            </div>
            <div class="$ticketfiles">

            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>






</div>
</div>
<script type="text/javascript">

    $('#tt').tree({
    });
    $('#tt').tree({
    data: <?= $dataTreeJson  ?>
    });
    $('#tt').tree({
    loadFilter: function(rows){
        return convert(rows);
    }
    });
    function convert(rows){
        function exists(rows, parentId){
            for(var i=0; i<rows.length; i++){
                if (rows[i].id == parentId) return true;
            }
            return false;
        }
        
        var nodes = [];
        // get the top level nodes
        for(var i=0; i<rows.length; i++){
            var row = rows[i];
            if (!exists(rows, row.parentId)){
                nodes.push({
                    id:row.id,
                    text:row.name
                });
            }
        }
        
        var toDo = [];
        for(var i=0; i<nodes.length; i++){
            toDo.push(nodes[i]);
        }
        while(toDo.length){
            var node = toDo.shift();    // the parent node
            // get the children nodes
            for(var i=0; i<rows.length; i++){
                var row = rows[i];
                if (row.parentId == node.id){
                    var child = {id:row.id,text:row.name};
                    if (node.children){
                        node.children.push(child);
                    } else {
                        node.children = [child];
                    }
                    toDo.push(child);
                }
            }
        }
        return nodes;
    }


    $('#tt').tree({
        onDblClick: function(node){
            var node = $('#tt').tree('getSelected');
            if (node){
                var s = node.text;
                if (node.attributes){
                    s += ","+node.attributes.p1+","+node.attributes.p2;
                }
                $("#hdcategory_id").empty();
                $("#hdcategory_id").append("<option value='" + node.id+"'' >"+s+"</option>");

            }
        },
        onLoadSuccess: function(node){
                $('#tt').tree('collapseAll');
            }
        
    });
    
</script>
