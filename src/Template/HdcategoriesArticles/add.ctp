<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="hdcategoriesArticles form">
	<h3><?= __('Add Hdcategories Article') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Hdcategories Articles'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($hdcategoriesArticle) ?>
        <?php
            echo $this->Form->control('hdcategory_id', ['options' => $hdcategories]);
            echo $this->Form->control('article_id', ['options' => $articles]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
