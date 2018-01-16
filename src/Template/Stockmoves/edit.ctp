<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="stockmoves form">
	<h3><?= __('Edit Stockmove') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Stockmoves'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($stockmove) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('warehouse')) ?>
							</td>
							<td width="40%">
								<?php  echo $this->Form->control('warehouse_id',['options' => $warehouses, 'empty' => true,'label'=> false]);?>
							</td>
							<td width="9%">
								<?= $this->form->label(__('warehouse_2')) ?>
							</td>
							<td colspan="3">
									<?php  echo $this->Form->control('warehouse_2', ['options' => $warehouses, 'empty' => true,'label'=> false]);?>
							</td>
						</tr>
							<tr>
							<td>
								<?= $this->form->label(__('receiver')) ?>
							</td>
							<td>
									<?php echo $this->Form->control('receiver',['type'=> 'text','label'=> false]);?>
							</td>
							<td>
								<?= $this->form->label(__('receiver_sign')) ?>
							</td>
							<td colspan="3">
									<?php echo $this->Form->control('receiver_sign',['label'=> false]);?>
							</td>
						</tr>
							<tr>
							<td width="7%">
								<?= $this->form->label(__('movereason')) ?>
							</td>
							<td colspan="5">
								<?php echo $this->Form->control('movereason_id', ['options' => $movereasons, 'empty' => true,'label'=> false]);?>
							</td>
						</tr>
						<tr>
						<td>
							<?= $this->form->label(__('shipper')) ?>
						</td>
						<td>
								<?php   echo $this->Form->control('shipper_id', ['options' => $shippers, 'empty' => true,'label'=> false]);?>
						</td>
						<td>
							<?= $this->form->label(__('guide_number')) ?>
						</td>
						<td>
								<?php echo $this->Form->control('guide_number',['label'=> false]);?>
						</td>
						<td>
							<?= $this->form->label(__('packages')) ?>
						</td>
						<td>
								<?php echo $this->Form->control('packages',['label'=> false]);?>
						</td>
					</tr>
					<tr>
					<td>
						<?= $this->form->label(__('user')) ?>
					</td>
					<td colspan="5">
							<?php   echo $this->Form->control('user_id', ['options' => $users, 'empty' => true,'label'=> false]);?>
					</td>
				</tr>
				<tr>
				<td>
					<?= $this->form->label(__('parent')) ?>
				</td>
				<td colspan="3">
						<?php   echo $this->Form->control('parent_id',['label'=> false]);?>
				</td>
				<td>
					<?= $this->form->label(__('confirmed')) ?>
				</td>
				<td>
						<?php   echo $this->Form->control('confirmed',['label'=> false]);?>
				</td>
			</tr>
			<tr>
			<td>
				<?= $this->form->label(__('notes')) ?>
			</td>
			<td colspan="5">
					<?php   echo $this->Form->control('notes',['label'=> false]);?>
			</td>
		</tr>
				</tbody>
		</table>
      
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
