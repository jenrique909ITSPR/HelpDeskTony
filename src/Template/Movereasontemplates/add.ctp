<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="movereasontemplates form">
	<h3><?= __('Add Movereasontemplate') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Movereasontemplates'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($movereasontemplate) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
				<tr>
					<td width="7%">
						<?= $this->form->label(__('template')) ?>
					</td>
					<td colspan="3">
							<?php  echo $this->Form->control('template', ['label'=> false]);?>
					</td>
			</tr>
			<tr>
				<td width="7%">
					<?= $this->form->label(__('user')) ?>
				</td>
				<td>
						<?php    echo $this->Form->control('user_id', ['options' => $users, 'empty' => true,'label'=> false]);?>
				</td>
				<td width="7%">
					<?= $this->form->label(__('movereason')) ?>
				</td>
				<td>
						<?php    echo $this->Form->control('movereason_id', ['options' => $movereasons, 'empty' => true,'label'=> false]);?>
				</td>
		</tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
