<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ticketstatus $ticketstatus  */
?>

<div class="ticketstatuses view">
    <h3><?= h($ticketstatus->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Ticketstatus'), ['action' => 'delete', $ticketstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketstatus->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Ticketstatus'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Ticketstatuses'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Ticketstatus'), ['action' => 'edit', $ticketstatus->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($ticketstatus->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ticketstatus->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Value Order') ?></th>
            <td><?= $this->Number->format($ticketstatus->value_order) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Tickettypes') ?>">
        <h4><?= __('Related Tickettypes') ?></h4>
        <?php if (!empty($ticketstatus->tickettypes)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Tag') ?></th>
                <th scope="col"><?= __('Rank') ?></th>
                <th scope="col"><?= __('Color') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($ticketstatus->tickettypes as $tickettypes): ?>
            <tr>
                <td><?= h($tickettypes->id) ?></td>
                <td><?= h($tickettypes->name) ?></td>
                <td><?= h($tickettypes->tag) ?></td>
                <td><?= h($tickettypes->rank) ?></td>
                <td><?= h($tickettypes->color) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tickettypes', 'action' => 'view', $tickettypes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tickettypes', 'action' => 'edit', $tickettypes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickettypes', 'action' => 'delete', $tickettypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickettypes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
