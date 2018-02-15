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

<div class="easyui-layout"  style="width:100%;height:650px;">
        <div  id="p" data-options="region:'west',collapsible:false" style="width:20%;padding:10px">

           <div style="margin-left: 0px;" id='contentAjax'></div>
        </div>
        <div data-options="region:'center'"  style="width:100%;">
             <div class="editdata">
          <table  cellpadding="0" cellspacing="0" style="width:100%; border:none;">
                <tbody>
                     <tr>
                        <td style="width: 10%;"><?= $this->form->label(__('Title')) ?></td>
                        <td colspan="8"><?php echo $this->Form->control('title',['label'=> false]); ?></td>
                    </tr>
                    <tr>
                        <td>
													<?= $this->form->label(__('Hdcategory')) ?>
												</td>
												<td style="width:33%;">
                        <?php echo $this->Form->control('hdcategory_id',[ 'label' => false ,'id' => 'hdcategory_id' , 'disabled' => 'true']); ?>
												</td>
                        <td>
												<?= $this->form->label(__('Source')) ?>
												</td>
												<td>
                        <?php  echo $this->Form->control('source_id', ['label' => false ,'options' => $sources, 'empty' => true]); ?>
												</td>
                        <td>
													<?= $this->form->label(__('Branch')) ?>
												</td>
                        <td>
													<?php echo $this->Form->control('branche_id', ['label' => false ,'options' => $branches, 'empty' => true]); ?>
												</td>

                    </tr>
                    <tr>
                        <td><?= $this->form->label(__('Ticket Status')) ?></td>
                        <td><?php echo  $this->Form->control('ticket_status_id', ['label' => false ,'options' => $ticketStatuses, 'empty' => true]); ?></td>
                        <td><?= $this->form->label(__('Ticket Type')) ?></td>
                        <td colspan="4"><?php echo $this->Form->control('tickettype_id', ['options' => $tickettypes, 'empty' => true, 'label'=> false]); ?></td>
                    </tr>
                    <tr>
                        <td><?= $this->form->label(__('Ticket Impact')) ?></td>
                        <td><?php  echo $this->Form->control('ticketimpact_id', ['label' => false ,'options' => $ticketimpacts, 'empty' => true]); ?></td>
                        <td><?= $this->form->label(__('Ticket Urgency')) ?></td>
                        <td><?php  echo $this->Form->control('ticketurgency_id', ['label' => false ,'options' => $ticketurgencies, 'empty' => true]); ?></td>
                        <td><?= $this->form->label(__('Ticket Priority')) ?></td>
                        <td colspan="5"><?php  echo $this->Form->control('ticketpriority_id', ['label' => false ,'options' => $ticketpriorities, 'empty' => true]); ?></td>

										</tr>
                    <tr>
                        <td><?= $this->form->label(__('User Autor')) ?></td>
                        <td><?php   echo $this->Form->control('user_autor',['label' => false,'options' => $users, 'empty' => true ]); ?></td>
                        <td><?= $this->form->label(__('User Requiered')) ?></td>
                        <td><?php echo $this->Form->control('user_requeried',['label' => false ,'options' => $users, 'empty' => true]); ?></td>
                        <td><?= $this->form->label(__('User')) ?></td>
                        <td><?php  echo $this->Form->control('user_id', ['label' => false ,'options' => $users, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
                        <td><?= $this->form->label(__('Group')) ?></td>
                        <td><?php   echo $this->Form->control('group_id', ['label' => false ,'options' => $groups, 'empty' => true]); ?></td>
                        <td><?= $this->form->label(__('Parent')) ?></td>
                        <td colspan="4"><?php  echo $this->Form->control('parent_id', ['label' => false ,'options' => $parentTickets, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
											<td><?= $this->form->label(__('Ip')) ?></td>
											<td><?php   echo $this->Form->control('ip',['label' => false ]);  ?></td>
                      <td><?= $this->form->label(__('Itemcode')) ?></td>
                      <td colspan="4"><?php echo $this->Form->control('itemcode_id', ['label' => false ,'options' => $itemcodes, 'empty' => true]); ?></td>
                    </tr>
                    <tr>
                        <td><?= $this->form->label(__('Resolution')) ?></td>
                        <td colspan="7"><?php echo $this->Form->control('resolution',['label' => false ]); ?></td>
                    </tr>
                    <tr>
                        <td><?= $this->form->label(__('Solution')) ?></td>
                        <td colspan="7"><?php echo $this->Form->control('solution',['label' => false ]); ?></td>
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
    var cargando = $("#contentAjax").html("<div class='loading'></div>");
            $.ajax({
                type: 'POST',
                url:'<?= $this->Url->build(['controller' => 'Hdcategories', 'action' => 'categoriesview']) ?>',
                data: "",
                beforeSend: function() {
                                cargando.show();
                },
                success: function(data) {
                        $('#contentAjax').html(data);
                }
            });

</script>
