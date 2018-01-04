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




 <?= $this->Form->create($ticket) ?>
<div class="easyui-layout"  style="width:100%;height:1200px;">
        <div  id="p" data-options="region:'west',collapsible:false"style="width:20%;padding:10px">
            <!--<a class="easyui-linkbutton" onclick="colapsar()">CollapseAll</a>-->
            <ul class="easyui-tree" data-options="animate:true,lines:true" id="tt"/>
        </div>
        <div data-options="region:'center'"  style="width:100%;">
             <div class="editdata">
          <table  cellpadding="0" cellspacing="0" style="width:100%; border:none;">
                <tbody>
                     <tr>
                        <td style="width: 12%;"><?= $this->form->label(__('Title')) ?></td>
                        <td style="width: 88%;"><?php echo $this->Form->control('title',['label'=> false]); ?></td>
                    </tr>
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
                        <td style="width: 12%;"><?= $this->form->label(__('Ticket Type')) ?></td>
                        <td style="width: 88%;"><?php echo $this->Form->control('tickettype_id', ['options' => $tickettypes, 'empty' => true, 'label'=> false]); ?></td>
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

            <?= $this->Form->button(__('Submit'),['style'=>'margin-top:10px;']) ?>
            </div>
        </div>
    </div>
<?= $this->Form->end() ?>
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
