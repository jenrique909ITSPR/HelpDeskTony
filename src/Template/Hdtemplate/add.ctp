<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="hdtemplate form">
	<h3><?= __('Add Hdtemplate') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Hdtemplate'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($hdtemplate) ?>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('hdcategory_id', ['options' => $hdcategories]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
