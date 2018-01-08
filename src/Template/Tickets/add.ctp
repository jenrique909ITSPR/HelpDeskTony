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
        <div  id="p" data-options="region:'west',collapsible:false" style="width:20%;padding:10px">
            <!--<a class="easyui-linkbutton" onclick="colapsar()">CollapseAll</a>-->

            <?= $this->Form->control(__('categorySearch'),['type' => 'text','id' => 'categorySearch' , 'rel' =>  $this->Url->build(['controller' => 'Hdcategories', 'action' => 'categoriesview'])]);  ?>
           <!-- <ul class="easyui-tree" data-options="animate:true,lines:true" id="tt"/>-->
           <div style="margin-left: 0px;" id='contentAjax'></div>
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
    $("#categorySearch").on("input", function(e) {
        if(($('#categorySearch').val()).length > 2 ){
            var cargando = $("#contentAjax").html("<div class='loading'></div>");
            $.ajax({
                type: 'POST',
                url:$(this).attr('rel'),
                data: $('#categorySearch').serialize(),
                beforeSend: function() {
                                cargando.show();
                },
                success: function(data) {
                        $('#contentAjax').html(data);

                }
            });
        }
        return false;
    });    

</script>
