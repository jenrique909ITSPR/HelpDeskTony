<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="userendmessages form">
	<h3><?= __('Add Userendmessage') ?></h3>
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
            echo $this->Form->control('startdate');
            echo $this->Form->control('endingdate');
        ?>
	
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
	</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Userendmessages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>