<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="articles form">
	<h3><?= __('Add Article') ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
		</ul>
	</div>

	<div class="editdata">
    <?= $this->Form->create($article) ?>
        <?php
            echo $this->Form->control('title');
              echo $this->Form->control('answer',['class' => 'txtAreaTiny'] );
            echo $this->Form->control('hdcategory_id', ['options' => $hdcategories, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('selected');
            echo $this->Form->control('roles._ids', ['options' => $roles]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>
