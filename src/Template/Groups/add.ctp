<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="groups form">
	<h3><?= __('Add Group') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($group) ?>

		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td style="width:5%;">
								<?= $this->form->label(__('name')) ?>
							</td>
							<td>
								<?php  echo $this->Form->control('name',['label'=> false]);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('color')) ?>
							</td>
							<td>
								  <?php  echo $this->Form->control('color', ['label'=> false]);?>
							</td>
						</tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
