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

<div class="easyui-layout"  style="width:100%;height:420px;">
        <div  id="p" data-options="region:'west',collapsible:false"style="width:25%;padding:10px">
           
           <div style="margin-left: 0px;" id='contentAjax2'></div>
        </div>
        <div data-options="region:'center'"  style="width:100%;">
          <div class="editdata">
            <?= $this->Form->create('ticket') ?>

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
                      <?php  echo $this->Form->control('hdcategory_id', ['options' => $hdcategories, 'empty' => true, 'label'=> false, 'id' => 'hdcategory_id' , 'onmouseover'=>'this.disabled=true;' ,'onmouseout'=>"this.disabled=false;" ,'onfocus'=>'this.disabled=true;','onblur'=>'this.disabled=false;' ]);?>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?= $this->form->label(__('description')) ?>
                    </td>
                    <td  colspan="5">
                      <?php  echo $this->Form->control('ticketnotes.0.description',['type' => 'textarea','label'=> false]);?>
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
                  <tr>
                    <td width="1%">
                      <?= $this->form->label(__('itemcodes')) ?>
                    </td>
                    <td>
                      <?php echo $this->Form->control('itemcode_id', ['type' => 'text' , 'label' => false , 'id' => 'itemcode_id']);?>

                    </td>
                  </tr>
                </tbody>
            </table>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
          </div>
        </div>
    </div>


</div>
<script type="text/javascript">
    var cargando = $("#contentAjax2").html("<div class='loading'></div>");
            $.ajax({
                type: 'POST',
                url:'<?= $this->Url->build(['controller' => 'Hdcategories', 'action' => 'categoriesview']) ?>',
                data: "",
                beforeSend: function() {
                                cargando.show();
                },
                success: function(data) {
                        $('#contentAjax2').html(data);
                }
            });
</script>
