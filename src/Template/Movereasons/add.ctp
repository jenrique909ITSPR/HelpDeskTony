<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="movereasons form">
	<h3><?= __('Add Movereason') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Movereasons'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($movereason) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('name')) ?>
							</td>
							<td>
								<?php  echo $this->Form->control('name',['label'=> false]);?>
							</td>
						</tr>
						<tr>
							<td>
								<?= $this->form->label(__('factor')) ?>
							</td>
							<td>
									<?php  echo $this->Form->control('factor', ['type'=>'number','label'=> false]);?>
							</td>
					</tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
