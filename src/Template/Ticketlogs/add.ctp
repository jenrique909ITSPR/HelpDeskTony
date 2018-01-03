<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="ticketlogs form">
	<h3><?= __('Add Ticketlog') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Ticketlogs'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($ticketlog) ?>
        <?php







        ?>
				<table cellpadding="0" cellspacing="0" style="width:100%; margin:10px;">
						<tbody>
								<tr><td  style="width:5%;"><?= $this->form->label(__('Ticket')) ?></td><td><?= $this->Form->control('ticket_id', ['label' => false,'options' => $tickets, 'empty' => true]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('User')) ?></td><td><?= $this->Form->control('user_id', ['label' => false,'options' => $users, 'empty' => true]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('Group')) ?></td><td><?= $this->Form->control('group_id', ['label' => false,'options' => $groups, 'empty' => true]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('User Transfer')) ?></td><td><?=  $this->Form->control('user_transfer',['label' => false]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('Group Transfer')) ?></td><td><?=$this->Form->control('group_transfer',['label' => false]);  ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('New Status')) ?></td><td><?= $this->Form->control('new_status',['label' => false]); ?></td></tr>
								<tr><td  style="width:5%;"><?= $this->form->label(__('Comments')) ?></td><td><?= $this->Form->control('coments',['label' => false]); ?></td></tr>
						</tbody>
				</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
