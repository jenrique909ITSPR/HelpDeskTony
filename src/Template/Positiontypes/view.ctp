<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Positiontype $positiontype  */
?>

<div class="positiontypes view">
    <h3><?= h($positiontype->name) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Positiontype'), ['action' => 'delete', $positiontype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positiontype->id)]) ?> </li>
			<li><?= $this->Html->link(__('New Positiontype'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Positiontypes'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Positiontype'), ['action' => 'edit', $positiontype->id]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($positiontype->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($positiontype->id) ?></td>
        </tr>
    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Positiontypebranches') ?>">
        <h4><?= __('Related Positiontypebranches') ?></h4>
        <?php if (!empty($positiontype->positiontypebranches)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Branch Id') ?></th>
                <th scope="col"><?= __('Positiontype Id') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
            <?php foreach ($positiontype->positiontypebranches as $positiontypebranches): ?>
            <tr>
                <td><?= h($positiontypebranches->id) ?></td>
                <td><?= h($positiontypebranches->branch_id) ?></td>
                <td><?= h($positiontypebranches->positiontype_id) ?></td>
                <td><?= h($positiontypebranches->qty) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Positiontypebranches', 'action' => 'view', $positiontypebranches->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Positiontypebranches', 'action' => 'edit', $positiontypebranches->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Positiontypebranches', 'action' => 'delete', $positiontypebranches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $positiontypebranches->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    </div>
</div>
</div>
