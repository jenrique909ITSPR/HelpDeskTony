<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketnotestype $ticketnotestype  */
?>

<div class="ticketnotestypes view">
    <h3><?= h($ticketnotestype->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Ticketnotestype'), ['action' => 'delete', $ticketnotestype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketnotestype->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Ticketnotestype'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Ticketnotestypes'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Ticketnotestype'), ['action' => 'edit', $ticketnotestype->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($ticketnotestype->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketnotestype->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Ticketnotes') ?>">
        <h4><?= __('Related Ticketnotes') ?></h4>
        <?php if (!empty($ticketnotestype->ticketnotes)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Ticket Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Ticketnotestype Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($ticketnotestype->ticketnotes as $ticketnotes): ?>
            <tr>
                <td><?= h($ticketnotes->id) ?></td>
                <td><?= h($ticketnotes->description) ?></td>
                <td><?= h($ticketnotes->ticket_id) ?></td>
                <td><?= h($ticketnotes->user_id) ?></td>
                <td><?= h($ticketnotes->created) ?></td>
                <td><?= h($ticketnotes->ticketnotestype_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ticketnotes', 'action' => 'view', $ticketnotes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ticketnotes', 'action' => 'edit', $ticketnotes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ticketnotes', 'action' => 'delete', $ticketnotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketnotes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
