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
        <?php
            echo $this->Form->control('branch_id', ['options' => $branches, 'empty' => true]);
            echo $this->Form->control('position_id', ['options' => $positions, 'empty' => true]);
            echo $this->Form->control('layout');
        ?>
	
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