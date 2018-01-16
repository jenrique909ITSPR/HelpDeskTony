<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="positions form">
	<h3><?= __('Add Position') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Positions'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($position) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
					<tr>
						<td>
							<?= $this->form->label(__('positiontypebranch')) ?>
						</td>
						<td>
								<?php  echo $this->Form->control('positiontypebranch_id', ['options' => $positiontypebranches, 'empty' => true,'label'=> false]);?>
						</td>
				</tr>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('name')) ?>
							</td>
							<td>
								<?php  echo $this->Form->control('name',['label'=> false]);?>
							</td>
						</tr>
					</tbody>
		</table>
        
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
