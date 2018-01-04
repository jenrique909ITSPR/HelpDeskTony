<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="articles form">
    <h3><?= __('Edit Article') ?></h3>
    <div class="actions">
        <ul>
            <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
        </ul>
    </div>

    <div class="editdata">
    <?= $this->Form->create($article) ?>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('answer');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('selected');
            echo $this->Form->control('roles._ids', ['options' => $roles]);
            echo $this->Form->control('hdcategories._ids', ['options' => $hdcategories]);
        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
