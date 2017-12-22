<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="branches form">
	<h3><?= __('Add Branch') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Branches'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata" >


    <?= $this->Form->create($branch) ?>
<<<<<<< HEAD
		<table>
  <tr>
			  
						<table cellpadding="0" cellspacing="0" style="width:100%;">
                <tbody>
                        <tr><td  style="width:5%;"><?= $this->form->label(__('Name')) ?></td><td><?=    $this->Form->control('name', ['label' => false]); ?></td></tr>
                        <tr><td style="width:5%;"><?= $this->form->label(__('Region')) ?></td><td><?=  $this->Form->control('branchgroup_id', ['options' => $branchgroups, 'empty' => true, 'label' => false]); ?></td></tr>
                </tbody>
        </table>
					</tr>
					<tr>

        </tr>
</table>
=======

		<table cellpadding="0" cellspacing="0" style="width:100%; margin:10px;">
				<tbody>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Name')) ?></td><td><?=    $this->Form->control('name', ['label' => false]); ?></td></tr>
						<tr><td style="width:5%;"><?= $this->form->label(__('Region')) ?></td><td><?=  $this->Form->control('branchgroup_id', ['options' => $branchgroups, 'empty' => true, 'label' => false]); ?></td></tr>
				</tbody>
		</table>
>>>>>>> 440bbfacb7afce482f5585a92aa8448c0c7c6413
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
