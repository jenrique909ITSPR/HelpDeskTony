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
    <table  cellpadding="0" cellspacing="0" style="width:100%; border:none;">
      <tbody>
        <tr>
          <td width="7%"><?= $this->form->label(__('title')) ?></td>
          <td colspan="5"><?php echo $this->Form->control('title',['label'=> false]);?></td>
        </tr>
        <tr>
          <td><?= $this->form->label(__('answer')) ?></td>
          <td colspan="4"><?php echo $this->Form->control('answer',['label'=> false]);?></td>
        </tr>
        <tr>
          <td><?= $this->form->label(__('user')) ?></td>
          <td  style="width:50%;"><?php echo $this->Form->control('user_id', ['options' => $users, 'empty' => true, 'label'=> false]);  ?></td>
          <td width="10%"><?= $this->form->label(__('selected')) ?></td>
          <td>  <?php echo $this->Form->control('selected',['label'=> false]); ?></td>
        </tr>
        <tr>
          <td><?= $this->form->label(__('rol')) ?></td>
          <td> <?php   echo $this->Form->control('roles._ids', ['options' => $roles, 'label'=> false, 'size'=> '5']);  ?></td>
          <td><?= $this->form->label(__('hdcategory')) ?></td>
          <td><?php   echo $this->Form->control('hdcategories._ids', ['options' => $hdcategories, 'label'=> false, 'size'=> '5']);?></td>
        </tr>
      </tbody>
    </table>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
