<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="userendmessages form">
    <h3><?= __('Edit Userendmessage') ?></h3>
    <div class="actions">
        <ul>
            <li><?= $this->Html->link(__('List Userendmessages'), ['action' => 'index']) ?></li>
        </ul>
    </div>
    
    <div class="editdata">
    <?= $this->Form->create($userendmessage) ?>
        <?php
            echo $this->Form->control('message');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('startdate', ['type' => 'text' , 'class' => 'easyui-datetimebox', 'style' => 'width:100%;'] );
                        //echo '<input class="easyui-datetimebox" label="Select DateTime:" labelPosition="top" style="width:100%;"/>';
            echo $this->Form->control('endingdate',['type' => 'text' , 'class' => 'easyui-datetimebox', 'style' => 'width:100%;']   );
        ?>


    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    </div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userendmessage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userendmessage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Userendmessages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>