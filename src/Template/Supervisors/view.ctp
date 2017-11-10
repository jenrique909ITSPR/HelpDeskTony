<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Supervisor $supervisor  */
?>

<div class="supervisors view">
    <h3><?= h($supervisor->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Supervisor'), ['action' => 'delete', $supervisor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supervisor->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Supervisor'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Supervisors'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Supervisor'), ['action' => 'edit', $supervisor->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $supervisor->has('user') ? $this->Html->link($supervisor->user->name, ['controller' => 'Users', 'action' => 'view', $supervisor->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Branchgroup') ?></th>
            <td><?= $supervisor->has('branchgroup') ? $this->Html->link($supervisor->branchgroup->name, ['controller' => 'Branchgroups', 'action' => 'view', $supervisor->branchgroup->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($supervisor->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Supervisor'), ['action' => 'edit', $supervisor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Supervisor'), ['action' => 'delete', $supervisor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supervisor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Supervisors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supervisor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Branchgroups'), ['controller' => 'Branchgroups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Branchgroup'), ['controller' => 'Branchgroups', 'action' => 'add']) ?> </li>
    </ul>
</nav>