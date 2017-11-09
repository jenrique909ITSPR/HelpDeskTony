<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->element('editorHtml'); ?>

<div class="articles form">
	<h3><?= __('Edit Article') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(
							__('Delete'),
							['action' => 'delete', $article->id],
							['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]
					)
			?></li>
			<li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($article) ?>
        <?php
            echo $this->Form->control('title');
              echo $this->Form->control('answer',['class' => 'editorHtml'] );
            echo $this->Form->control('hdcategory_id', ['options' => $hdcategories, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('selected');
            echo $this->Form->control('roles._ids', ['options' => $roles]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
