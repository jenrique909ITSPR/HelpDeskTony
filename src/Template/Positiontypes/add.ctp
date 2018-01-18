<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="positiontypes form">
	<h3><?= __('Add Positiontype') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Positiontypes'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($positiontype) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('name')) ?>
							</td>
							<td colspan="3">
								<?php  echo $this->Form->control('name',['label'=> false]);?>
							</td>
						</tr>
					</tbody>
				</table>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
