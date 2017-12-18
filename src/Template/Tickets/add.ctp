<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="tickets form">
	<h3><?= __('Add Ticket') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticket) ?>
        <?php
            echo $this->Form->control('tickettype_id', ['options' => $tickettypes, 'empty' => true]);
            echo $this->Form->control('ticket_status_id', ['options' => $ticketStatuses, 'empty' => true]);
            echo $this->Form->control('source_id', ['options' => $sources, 'empty' => true]);
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('solution');
            echo $this->Form->control('resolution');
            echo $this->Form->control('itemcode_id', ['options' => $itemcodes, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true]);
            echo $this->Form->control('user_autor',['options' => $users, 'empty' => true]);
            echo $this->Form->control('user_requeried',['options' => $users, 'empty' => true]);
            echo $this->Form->control('ticketimpact_id', ['options' => $ticketimpacts, 'empty' => true]);
            echo $this->Form->control('ticketurgency_id', ['options' => $ticketurgencies, 'empty' => true]);
            echo $this->Form->control('ticketpriority_id', ['options' => $ticketpriorities, 'empty' => true]);
            echo $this->Form->control('parent_id', ['options' => $parentTickets, 'empty' => true]);
            echo $this->Form->control('hdcategory_id', ['type' => 'text','class' => 'easyui-combotree' ,'style' => 'width:100%;', 'id' => "cc" , 'empty' => true]);
            echo $this->Form->control('ip');
            echo $this->Form->control('branch_id', ['options' => $branches, 'empty' => true]);
        ?>
         

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
<script type="text/javascript">

    $('#cc').combotree({
    });
    $('#cc').combotree({
    loadFilter: function(rows){
        return convert(rows);
    }
    });
    $('#cc').combotree('loadData', <?= $dataTreeJson  ?> );

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
</script>