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
        <tr><td colspan="4"><?php echo $this->Form->control('title');?></td></tr>
        <tr><td colspan="4"><?php echo $this->Form->control('answer');?></td></tr>
        <tr><td  style="width:50%;"><?php echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);  ?></td>
        <td>  <?php echo $this->Form->control('selected'); ?></td>
        </tr>
        <tr><td> <?php   echo $this->Form->control('roles._ids', ['options' => $roles]);  ?></td>
          <td><?php   echo $this->Form->control('hdcategories._ids', ['options' => $hdcategories]);?></td>
        </tr>
      </tbody>
    </table>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
