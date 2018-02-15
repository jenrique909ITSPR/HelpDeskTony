<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->element('helpdesktools') ?>
<div class="tickets form">
	<h3><?= __('Edit Ticket') ?></h3>
	<div class="actions">
		<ul>
			<?php $idM= $dataMove['id'];
						//$itemcodeM= $dataMove['itemcode'];
			?>
			<li><?= $this->Html->link(__('List Tickets'), ['action' => 'index']) ?></li>
			<li><?= $this->Html->link(__('Create Stockemove'), ['controller'=> 'stockmoves','action' => 'add','idM'=>$idM]) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticket) ?>
		<table  cellpadding="0" cellspacing="0" style="width:100%; border:none;">
			<tbody>
				<tr>
					<td  style="width:5%;">
						<?= $this->form->label(__('title')) ?>
					</td>
				<td colspan="5">
				<?php echo $this->Form->control('title', ['label'=> false]);?>
				</td>
				</tr>
				<tr>
				<td  style="width:5%;">
					<?= $this->form->label(__('tickettype')) ?>
				</td>
				<td width="33%">
        <?php echo $this->Form->control('tickettype_id', ['options' => $tickettypes, 'empty' => true, 'label'=> false]);?>
				</td>
				<td  style="width:5%;">
						<?= $this->form->label(__('ticket_status')) ?>
				</td>
				<td>
				<?php echo $this->Form->control('ticket_status_id', ['options' => $ticketStatuses, 'empty' => true, 'label'=> false]);?>
				</td>
				<td  style="width:5%;">
						<?= $this->form->label(__('source')) ?>
				</td>
				<td>
				<?php echo $this->Form->control('source_id', ['options' => $sources, 'empty' => true, 'label'=> false]);?>
				</td>
				</tr>
				<tr>
					<td  style="width:5%;">
						<?= $this->form->label(__('branch')) ?>
					</td>
				<td>
				<?php echo $this->Form->control('branch_id', ['options' => $branches, 'empty' => true, 'label'=> false]);?>
				</td>
					<td  style="width:5%;">
						<?= $this->form->label(__('hdcategory')) ?>
					</td>
				<td colspan="3">
				<?php echo $this->Form->control('hdcategory_id', ['type' => 'text','class' => 'easyui-combotree' ,'style' => 'width:100%;', 'id' => "cc" , 'empty' => true, 'label'=> false]);?>
				</td>
				</tr>
				<tr>
					<td  style="width:5%;">
						<?= $this->form->label(__('parent')) ?>
					</td>
				<td colspan="5">
				<?php echo $this->Form->control('parent_id', ['options' => $parentTickets, 'empty' => true, 'label'=> false]);?>
				</td>
				</tr>
				<tr>
					<td  style="width:5%;">
							<?= $this->form->label(__('itemcode')) ?>
					</td>
					<td>
					<?php echo $this->Form->control('itemcode_id', ['options' => $itemcodes, 'empty' => true, 'label'=> false]);?>
					</td>
					<td  style="width:5%;">
						<?= $this->form->label(__('ip')) ?>
					</td>
				<td colspan="3">
				<?php echo $this->Form->control('ip', ['label'=> false]);?>
				</td>
				</tr>
				<tr>
					<td  style="width:5%;">
						<?= $this->form->label(__('description')) ?>
					</td>
				<td colspan="5">
        <?php echo $this->Form->control('description', ['label'=> false]);?>
				</td>
				</tr>
				<tr>
					<td  style="width:5%;">
						<?= $this->form->label(__('ticketimpact')) ?>
					</td>
				<td>
				<?php echo $this->Form->control('ticketimpact_id', ['options' => $ticketimpacts, 'empty' => true, 'label'=> false]);?>
				</td>
				<td  style="width:5%;">
						<?= $this->form->label(__('ticketurgency')) ?>
				</td>
				<td>
				<?php echo $this->Form->control('ticketurgency_id', ['options' => $ticketurgencies, 'empty' => true, 'label'=> false]);?>
				</td>
				<td  style="width:5%;">
						<?= $this->form->label(__('ticketpriority')) ?>
				</td>
				<td>
				<?php echo $this->Form->control('ticketpriority_id', ['options' => $ticketpriorities, 'empty' => true, 'label'=> false]);?>
				</td>
				</tr>
				<tr>
					<td  style="width:5%;">
						<?= $this->form->label(__('user')) ?>
					</td>
				<td>
				<?php echo $this->Form->control('user_id', ['options' => $users, 'empty' => true, 'label'=> false]);?>
				</td>
				<td  style="width:5%;">
						<?= $this->form->label(__('group')) ?>
				</td>
				<td colspan="3">
				<?php echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true, 'label'=> false]);?>
				</td>
				</tr>
				<tr>
					<td  style="width:5%;">
						<?= $this->form->label(__('user_autor')) ?>
					</td>
				<td>
				<?php echo $this->Form->control('user_autor',['options' => $users, 'empty' => true, 'label'=> false]);?>
				</td>
				<td  style="width:5%;">
						<?= $this->form->label(__('user_requeried')) ?>
				</td>
				<td colspan="3">
				<?php echo $this->Form->control('user_requeried',['options' => $users, 'empty' => true, 'label'=> false]);?>
				</td>
				</tr>
				<tr>
					<td  style="width:5%;">
						<?= $this->form->label(__('solution')) ?>
					</td>
				<td colspan="5">
        <?php echo $this->Form->control('solution', ['label'=> false]);?>
				</td>
				</tr>
				<tr>
					<td  style="width:5%;">
						<?= $this->form->label(__('resolution')) ?>
					</td>
				<td colspan="5">
        <?php echo $this->Form->control('resolution', ['label'=> false]);?>
				</td>
				</tr>
			</tbody>
		</table>
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
