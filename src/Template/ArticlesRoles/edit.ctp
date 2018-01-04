<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="articlesRoles form">
	<h3><?= __('Edit Articles Role') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Articles Roles'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($articlesRole) ?>
        <?php
            echo $this->Form->control('article_id', ['options' => $articles, 'empty' => true]);
            echo $this->Form->control('role_id', ['options' => $roles, 'empty' => true]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
