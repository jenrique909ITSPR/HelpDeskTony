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
    <table cellpadding="0" cellspacing="0" style="width:100%;">
              <tbody>
                      <tr><td  style="width:5%;"><?= $this->form->label(__('title')) ?></td><td><?=   $this->Form->control('title',['label' => false]); ?></td></tr>
                      <tr><td style="width:5%;"><?= $this->form->label(__('answer')) ?></td><td><?=  $this->Form->control('answer',['label' => false]);  ?></td></tr>
                      <tr><td style="width:5%;"><?= $this->form->label(__('user_id')) ?></td><td><?=  $this->Form->control('user_id', ['options' => $users, 'empty' => true , 'label' => false]);  ?></td></tr>
                      <tr><td style="width:5%;"><?= $this->form->label(__('selected')) ?></td><td><?=  $this->Form->control('selected',['label' => false]);  ?></td></tr>
                      <tr><td  style="width:5%;"><?= $this->form->label(__('roles._ids')) ?></td><td><?= $this->Form->control('roles._ids', ['options' => $roles , 'label' => false]);?></td></tr>
                      <tr><td  style="width:5%;"><?= $this->form->label(__('hdcategories._ids')) ?></td><td><?= $this->Form->control('hdcategories._ids', ['options' => $hdcategories , 'label' => false]);?></td></tr>
              </tbody>
      </table>
        <?php






          

        ?>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
