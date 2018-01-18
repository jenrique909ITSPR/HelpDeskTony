<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="userendmessages form">
    <h3><?= __('Add Userendmessage') ?></h3>
    <div class="actions">
        <ul>
            <li><?= $this->Html->link(__('List Userendmessages'), ['action' => 'index']) ?></li>
        </ul>
    </div>

    <div class="editdata">
    <?= $this->Form->create($userendmessage) ?>
    <table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
        <tbody>
            <tr>
              <td style="width:10%;">
                <?= $this->form->label(__('message')) ?>
              </td>
              <td colspan="3">
                <?php  echo $this->Form->control('message',['label'=> false]);?>
              </td>
            </tr>
            <tr>
              <td>
                <?= $this->form->label(__('user')) ?>
              </td>
              <td colspan="3">
                  <?php  echo $this->Form->control('user_id', ['options' => $users,'label'=> false]);?>
              </td>
            </tr>
            <tr>
              <td>
                <?= $this->form->label(__('startdate')) ?>
              </td>
              <td width="40%">
                  <?php  echo $this->Form->control('startdate', ['type' => 'text' , 'class' => 'easyui-datetimebox', 'style' => 'width:100%;','label'=> false]);?>
              </td>
              <td>
                <?= $this->form->label(__('endingdate')) ?>
              </td>
              <td width="40%">
                  <?php echo $this->Form->control('endingdate',['type' => 'text' , 'class' => 'easyui-datetimebox', 'style' => 'width:100%;', 'label'=>false]   );?>
              </td>
            </tr>
        </tbody>
    </table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
