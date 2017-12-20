<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="hdcategories form">
	<h3><?= __('Add Hdcategory') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Hdcategories'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($hdcategory) ?>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('parent_id', ['options' => $parentHdcategories, 'empty' => true]);
            echo $this->Form->control('description');
            echo $this->Form->control('articles._ids', ['options' => $articles]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
