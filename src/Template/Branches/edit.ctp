<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="branches form">
	<h3><?= __('Edit Branch') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Branches'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($branch) ?>
		<table  cellpadding="0" cellspacing="0" style="width:100%; border:none;">
							<tbody>
							<tr>
							<td  style="width:5%;">
									<?= $this->form->label(__('name')) ?>
							</td>
							<td>
								<?php echo $this->Form->control('Nombre',['label'=> false]); ?>
							</td>
							</tr>
							<tr>
							<td  style="width:5%;">
									<?= $this->form->label(__('branchgroup')) ?>
							</td>
							<td>
								<?php echo $this->Form->control('branchgroup_id', ['options' => $branchgroups, 'empty' => true, 'label'=> false]);?>
							</td>
							</tr>
							<tr>
							<td  style="width:5%;">
									<?= $this->form->label(__('company')) ?>
							</td>
							<td>
								<?php echo $this->Form->control('Cia', ['options' => $companies, 'empty' => true, 'label'=> false]);?>
							</td>
							</tr>
							</tbody>
		</table>


    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
