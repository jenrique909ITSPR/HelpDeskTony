<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Userendmessage $userendmessage  */
?>

<div class="userendmessages view">
    <h3><?= h($userendmessage->id) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Userendmessage'), ['action' => 'delete', $userendmessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userendmessage->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Userendmessage'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Userendmessages'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Userendmessage'), ['action' => 'edit', $userendmessage->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userendmessage->has('user') ? $this->Html->link($userendmessage->user->name, ['controller' => 'Users', 'action' => 'view', $userendmessage->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userendmessage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userendmessage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userendmessage->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Startdate') ?></th>
            <td><?= h($userendmessage->startdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Endingdate') ?></th>
            <td><?= h($userendmessage->endingdate) ?></td>
        </tr>
    </table>
	</div>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($userendmessage->message)); ?>
    </div>
<div class="easyui-tabs">
</div>
</div>
