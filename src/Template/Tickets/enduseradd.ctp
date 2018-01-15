<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="tickets form">
    <?php
        switch ($ticket->tickettype_id) {
          case 1:
           echo '<h3>Add Incident</h3>';
           break;
          case 4:
            echo '<h3>Add Request</h3>';
            break;
          default:
              echo '<h3><?= __("Add Ticket") ?></h3>';
            break;
        }
     ?>

	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('Cancel'), ['controller' => 'tickets', 'action' => 'enduserindex']) ?></li>
		</ul>
	</div>

<<<<<<< HEAD
	<div class="editdata">
    <?= $this->Form->create($ticket) ?>

    <table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
        <tbody>
          <tr>
            <td style="width:1%;">
              <?= $this->form->label(__('title')) ?>
            </td>
            <td width="20% " colspan="5">
              <?php  echo $this->Form->control('title', ['label'=> false]);?>
            </td>
          </tr>
          <tr>
            <td>
              <?= $this->form->label(__('hdcategory')) ?>
            </td>
            <td  colspan="5">
              <?php  echo $this->Form->control('hdcategory_id', ['options' => $hdcategories, 'empty' => true, 'label'=> false]);?>
            </td>
          </tr>
          <tr>
            <td>
              <?= $this->form->label(__('description')) ?>
            </td>
            <td  colspan="5">
              <?php  echo $this->Form->control('description',['label'=> false]);?>
            </td>
          </tr>
          <tr>
            <td>
              <?= $this->form->label(__('user_author')) ?>
            </td>
            <td>
              <?php echo $this->Form->control('user_autor',['options' => $users , 'empty' => true,'label'=> false]);?>
            </td>
            <td width="1%">
              <?= $this->form->label(__('user_requeried')) ?>
            </td>
            <td>
              <?php   echo $this->Form->control('user_requeried',['options' => $users , 'empty' => true, 'label'=>false]);?>
            </td>
            <td width="1%">
              <?= $this->form->label(__('ip')) ?>
            </td>
            <td>
              <?php    echo $this->Form->control('ip', ['label'=>false]);?>
            </td>
          </tr>
          <tr>
            <td>
              <?= $this->form->label(__('ticketimpact')) ?>
            </td>
            <td>
              <?php echo $this->Form->control('ticketimpact_id', ['options' => $ticketimpacts, 'empty' => true, 'label'=> false]);?>
            </td>
            <td width="1%">
              <?= $this->form->label(__('ticketurgency')) ?>
            </td>
            <td>
              <?php  echo $this->Form->control('ticketurgency_id', ['options' => $ticketurgencies, 'empty' => true, 'label'=>false]);?>
            </td>
            <td width="1%">
              <?= $this->form->label(__('ticketpriority')) ?>
            </td>
            <td>
              <?php    echo $this->Form->control('ticketpriority_id', ['options' => $ticketpriorities, 'empty' => true,'label'=> false]);?>
            </td>
          </tr>
        </tbody>
    </table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
=======

 <?= $this->Form->create($ticket) ?>

<div class="easyui-layout"  style="width:100%;height:550px;">
        <div  id="p" data-options="region:'west',collapsible:false" style="width:20%;padding:10px">
            <?= $this->Form->control(__('categorySearch'),['type' => 'text','id' => 'categorySearch' , 'rel' =>  $this->Url->build(['controller' => 'Hdcategories', 'action' => 'categoriesview'])]);  ?>
           <!-- <ul class="easyui-tree" data-options="animate:true,lines:true" id="tt"/>-->
           <div>
            <div style="margin-left: 0px;" id='contentAjax2'></div>  
           </div>
           
        </div>
        <div data-options="region:'center'"  style="width:100%;">
            <div class="editdata">
                <?= $this->Form->create($ticket) ?>
                    <?php
                        /*echo $this->Form->control('tickettype_id', ['options' => $tickettypes, 'empty' => true]);
                        echo $this->Form->control('ticket_status_id', ['options' => $ticketStatuses, 'empty' => true]);
                        echo $this->Form->control('source_id', ['options' => $sources, 'empty' => true]);*/
                        echo $this->Form->control('hdcategory_id',[ 'id' => 'hdcategory_id' , 'disabled' => 'true', 'empty' => true]);
                        echo $this->Form->control('title');
                        echo $this->Form->control('description');
                        /*echo $this->Form->control('solution');
                        echo $this->Form->control('resolution');
                        echo $this->Form->control('itemcode_id', ['options' => $itemcodes, 'empty' => true]);
                        echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
                        echo $this->Form->control('group_id', ['options' => $groups, 'empty' => true]);*/
                        echo $this->Form->control('user_autor',['options' => $users , 'empty' => true   ]);
                        echo $this->Form->control('user_requeried',['options' => $users , 'empty' => true]);
                        echo $this->Form->control('ticketimpact_id', ['options' => $ticketimpacts, 'empty' => true]);
                        echo $this->Form->control('ticketurgency_id', ['options' => $ticketurgencies, 'empty' => true]);
                        echo $this->Form->control('ticketpriority_id', ['options' => $ticketpriorities, 'empty' => true]);
                        /*echo $this->Form->control('parent_id', ['options' => $parentTickets, 'empty' => true]);*/

                        echo $this->Form->control('ip');
                    ?>

                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>


>>>>>>> 48c503e80e1a583848499bb642b8fcb5b585d3c2
	</div>
</div>
<script type="text/javascript">
    $("#categorySearch").on("input", function(e) {
        if(($('#categorySearch').val()).length > 2 ){
            var cargando = $("#contentAjax2").html("<div class='loading'></div>");
            $.ajax({
                type: 'POST',
                url:$(this).attr('rel'),
                data: $('#categorySearch').serialize(),
                beforeSend: function() {
                                cargando.show();
                },
                success: function(data) {
                        $('#contentAjax2').html(data);

                }
            });
        }
        return false;
    });    

</script>
