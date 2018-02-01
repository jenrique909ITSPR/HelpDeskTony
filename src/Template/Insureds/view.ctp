<?php
/**
  * @var \App\View\AppView $this
  * @var \Cake\Datasource\EntityInterface $insured  */
?>

<div class="insureds view">
    <h3><?= h($insured->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Insured'), ['action' => 'delete', $insured->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insured->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Insured'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Insureds'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Insured'), ['action' => 'edit', $insured->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($insured->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($insured->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
</div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Insured'), ['action' => 'edit', $insured->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Insured'), ['action' => 'delete', $insured->id], ['confirm' => __('Are you sure you want to delete # {0}?', $insured->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Insureds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Insured'), ['action' => 'add']) ?> </li>
    </ul>
</nav>