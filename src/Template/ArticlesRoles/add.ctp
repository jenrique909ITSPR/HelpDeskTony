<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="articlesRoles form">
	<h3><?= __('Add Articles Role') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Articles Roles'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($articlesRole) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
				<tr>
					<td width="7%">
						<?= $this->form->label(__('article')) ?>
					</td>
					<td>
							<?php  echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true,'label'=> false]);?>
					</td>
			</tr>
			<tr>
				<td width="7%">
					<?= $this->form->label(__('name')) ?>
				</td>
				<td>
						<?php  echo $this->Form->control('role_id', ['options' => $roles, 'empty' => true,'label'=> false]);?>
				</td>
		</tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
