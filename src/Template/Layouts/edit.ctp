<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="layouts form">
	<h3><?= __('Edit Layout') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Layouts'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($layout) ?>
		<table cellpadding="0" cellspacing="0" style="width:100%; margin:10px;">
				<tbody>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Branch')) ?></td><td><?=   $this->Form->control('branch_id', ['label' => false,'options' => $branches, 'empty' => true]); ?></td></tr>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Position')) ?></td><td><?=  $this->Form->control('position_id', ['label' => false,'options' => $positions, 'empty' => true]); ?></td></tr>
						<tr><td  style="width:5%;"><?= $this->form->label(__('Layout')) ?></td><td><?=  $this->Form->control('layout',['label' => false]); ?></td></tr>
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
                ['action' => 'delete', $layout->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $layout->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Layouts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Branches'), ['controller' => 'Branches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Layoutcategories'), ['controller' => 'Layoutcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layoutcategory'), ['controller' => 'Layoutcategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
