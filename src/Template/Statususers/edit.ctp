<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="statususers form">
	<h3><?= __('Edit Statususer') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Statususers'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($statususer) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
					<tr>
						<td width="7%">
							<?= $this->form->label(__('name')) ?>
						</td>
						<td>
								<?php  echo $this->Form->control('name', ['label'=> false]);?>
						</td>
				</tr>
				</tbody>
		</table>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
