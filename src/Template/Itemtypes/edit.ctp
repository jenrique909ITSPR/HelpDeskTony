<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="itemtypes form">
	<h3><?= __('Edit Itemtype') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Itemtypes'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($itemtype) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; border:none;">
				<tbody>
						<tr>
							<td style="width:7%;">
								<?= $this->form->label(__('name')) ?>
							</td>
							<td colspan="5">
								<?php  echo $this->Form->control('name',['label'=> false]);?>
							</td>
						</tr>
				</tbody>
		</table>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $itemtype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itemtype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Itemtypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>
