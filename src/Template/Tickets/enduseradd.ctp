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
	</div>
</div>
