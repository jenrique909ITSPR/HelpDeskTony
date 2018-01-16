<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="articlefiles form">
	<h3><?= __('Edit Articlefile') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Articlefiles'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($articlefile) ?>
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
				<tr>
					<td width="7%">
						<?= $this->form->label(__('article')) ?>
					</td>
					<td>
							<?php  echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true,'label'=> false]);?>
					</td>
			</tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
