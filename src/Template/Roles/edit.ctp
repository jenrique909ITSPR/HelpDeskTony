<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="roles form">
	<h3><?= __('Edit Role') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($role) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td style="width:5%;">
								<?= $this->form->label(__('name')) ?>
							</td>
							<td>
								<?php echo $this->Form->control('name', ['label'=> false]);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('articles')) ?>
							</td>
							<td>
								  <?php  echo $this->Form->control('articles._ids', ['options' => $articles,'label'=> false]);?>
							</td>
						</tr>
				</tbody>
		</table>
        <?php


        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
