<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="articlefiles form">
	<h3><?= __('Add Articlefile') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Articlefiles'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($articlefile) ?>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
