<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Company $company
  */
?>

<div class="companies view">
    <h3><?= h($company->Nombre) ?></h3>
	<div class="actions">
		<ul>
			<li><?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->Cia], ['confirm' => __('Are you sure you want to delete # {0}?', $company->Cia)]) ?> </li>
			<li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> </li>
			<li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?> </li>
			<li><?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->Cia]) ?> </li>
		</ul>
	</div>
	<div class="viewdata">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($company->Nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($company->Cia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RFC') ?></th>
            <td><?= h($company->RFC) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('c.p.') ?></th>
            <td><?= h($company->CP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suc Corpo') ?></th>
            <td><?= h($company->Suc_Corpo) ?></td>
        </tr>

    </table>
	</div>
<div class="easyui-tabs">
    <div class="related" title="<?= __('Branches') ?>">
                
        <?php if (!empty($company->branches)): ?>
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
                <th scope="col"><?= __('SUCURSAL') ?></th>
                <th scope="col"><?= __('NOMBRE') ?></th>
                <th scope="col"><?= __('Cia') ?></th>
                <th scope="col"><?= __('EMAIL') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
		  </thead>
		  <tbody>
        <?php foreach ($company->branches as $branches): ?>
            <tr>
                <td><?= h($branches->SUCURSAL) ?></td>
                <td><?= h($branches->NOMBRE) ?></td>
                <td><?= h($branches->Cia) ?></td>
                <td><?= h($branches->EMAIL) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $branches->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $branches->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $branches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branches->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
		  </tbody>
        </table>
        <?php endif; ?>
    
    </div>
</div>
</div>
